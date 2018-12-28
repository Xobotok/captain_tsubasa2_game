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
use app\models\Player;
use app\models\Team;
use app\models\Tour;
use app\models\User;
use Yii;
use yii\web\Controller;

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
        $player_stamina_controller = new PlayerStaminaController($game_progress->id,
            $player_team->no2,$player_team->no3,$player_team->no4,$player_team->no5,$player_team->no6,$player_team->no7,
            $player_team->no8,$player_team->no9,$player_team->no10,$player_team->no11);
        $player_stamina_controller->addPlayersStamina();

        return $this->render("new_game",[
            'tour'=>$tour,
            'game'=>$game,
            'player_team'=>$player_team,
            'enemy_team'=>$enemy_team]);
    }
    public function actionStatus(){
        $user = User::findOne(1);
        $tour = Tour::findOne($user->tour_id);
        $game = Game::findOne($user->game_id);
        $player_team = Team::findOne($game->player_team_id);
        $enemy_team = Team::findOne($game->enemy_team_id);
        return $this->render("game_status",[
            'tour'=>$tour,
            'game'=>$game,
            'player_team'=>$player_team,
            'enemy_team'=>$enemy_team]);
    }
    public function actionPlay(){
        $user = User::findOne(1);
        $tour = Tour::findOne($user->tour_id);
        $game = Game::findOne($user->game_id);
        $player_team = Team::findOne($game->player_team_id);
        $enemy_team = Team::findOne($game->enemy_team_id);
        $game_progress = GameProgress::findOne($user->current_game_progress_id);
        return $this->render("game_play",[
            'tour'=>$tour,
            'game'=>$game,
            'game_progress'=>$game_progress,
            'player_team'=>$player_team,
            'enemy_team'=>$enemy_team]);
    }
    public function actionPlayerGoal() {

    }

}
