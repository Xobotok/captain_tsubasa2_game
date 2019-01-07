<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 29.12.2018
 * Time: 13:30
 */

namespace app\controllers;


use app\models\Player;
use Yii;
use yii\helpers\VarDumper;
use yii\web\Controller;
use app\components\engine\GamePlay;

class ScenesController extends Controller {

    public function actionReferee() {
        $this->layout = false;
        return $this->render("referee_startgame");
    }
    public function actionBallOutput($active_player, $pass_to, $team) {
        $this->layout = false;
        $session = Yii::$app->session;
        $session->open();
        $numbers = range(8, 11);
        shuffle($numbers);
        foreach ($session['team_players'] as $player) {
           if ($player['number'] === $numbers[0]) {
               $active_player = strtolower($player['attributes']['name']);
           }
            if ($player['number'] === $numbers[1]) {
                $pass_to = $player['number'];
            }
        }
        return $this->render("ball_output", ['player' => $active_player, 'pass_to' => $pass_to, 'team' => strtolower($session['player_team']->name), '']);
    }
    public function actionSkyPassBall() {
        $this->layout = false;
        return $this->render("sky_pass_ball");
    }

}