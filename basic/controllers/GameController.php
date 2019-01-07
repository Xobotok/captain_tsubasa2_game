<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 25.12.2018
 * Time: 18:00
 */

namespace app\controllers;


use app\models\Game;
use app\models\GameProgress;
use app\components\php_helpers\PlayerStaminaController;
use app\models\Gk;
use app\models\Player;
use app\models\Team;
use app\models\Tour;
use app\models\User;
use Yii;
use yii\helpers\VarDumper;
use yii\web\Controller;
use app\components\engine\GamePlay;

class GameController extends Controller {

    public function actionStart(){
        $user = User::findOne(1);
        $tour = Tour::findOne($user->tour_id);
        $game = Game::findOne($user->game_id);
        $player_team = Team::findOne($game->player_team_id);
        $enemy_team = Team::findOne($game->enemy_team_id);
        $game_progress = new GameProgress();
        $game_progress->user_id = $user->id;
        $game_progress->game_id = $game->id;
        $game_progress->player_team_score = '0';
        $game_progress->enemy_team_score = '0';
        $game_progress->save();
        $connection = Yii::$app->db;
        $connection->createCommand("UPDATE user SET current_game_progress_id = $game_progress->id WHERE id=$user->id")->execute();
        $session = Yii::$app->session;
        $session->open();
        $session['user'] = $user;
        $session['tour'] = $tour;
        $session['game'] = $game;
        $session['player_team'] = $player_team;
        $session['enemy_team'] = $enemy_team;
        $session['game_progress'] = $game_progress;
        return $this->render("new_game",[
            'tour'=>$tour,
            'game'=>$game,
            'player_team'=>$player_team,
            'enemy_team'=>$enemy_team]);
    }
    public function actionStatus(){
        $session = Yii::$app->session;
        $session->open();
        $user = $session['user'];
        $tour = $session['tour'];
        $game = $session['game'];
        $player_team = $session['player_team'];
        $enemy_team = $session['enemy_team'];
        return $this->render("game_status",[
            'tour'=>$tour,
            'game'=>$game,
            'player_team'=>$player_team,
            'enemy_team'=>$enemy_team]);
    }
    public function actionPlay(){
        $session = Yii::$app->session;
        $session->open();
        $user = $session['user'];
        $tour = $session['tour'];
        $game = $session['game'];
        $player_team = $session['player_team'];
        $session['game_play'] = new GamePlay();
        $enemy_team = $session['enemy_team'];
        $player_team_players = Player::find()->where(['team_id' => $game->player_team_id])->all();
        $session['team_players'] = $player_team_players;
        $player_team_gk = Gk::find()->where(['team_id' => $game->player_team_id])->all();
        $enemy_team_players = Player::find()->where(['team_id' => $game->enemy_team_id])->all();
        $enemy_team_gk = Gk::find()->where(['team_id' => $game->enemy_team_id])->all();
        $game_progress = GameProgress::findOne($user->current_game_progress_id);
        return $this->render("game_play",[
            'tour'=>$tour,
            'game'=>$game,
            'player_team_players' =>$player_team_players,
            'player_team_gk' =>$player_team_gk,
            'enemy_team_players' =>$enemy_team_players,
            'enemy_team_gk' =>$enemy_team_gk,
            'game_progress'=>$game_progress,
            'player_team'=>$player_team,
            'enemy_team'=>$enemy_team]);
    }
    public function actionPlayerGoal() {

    }

}
