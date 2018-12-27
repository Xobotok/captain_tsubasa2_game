<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 25.12.2018
 * Time: 18:00
 */

namespace app\controllers;


use app\models\Game;
use app\models\Team;
use app\models\Tour;
use app\models\User;
use yii\web\Controller;

class GameController extends Controller {

    public function actionStart(){
        $tour = Tour::findOne(1);
        $game = Game::findOne(1);
        $player_team = Team::findOne($game->player_team_id);
        $enemy_team = Team::findOne($game->enemy_team_id);

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
        return $this->render("game_play",[
            'tour'=>$tour,
            'game'=>$game,
            'player_team'=>$player_team,
            'enemy_team'=>$enemy_team]);
    }

}