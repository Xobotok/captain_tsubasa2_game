<?php

namespace app\controllers;

use app\models\GameProgress;
use app\models\User;

class GameProgressController extends \yii\web\Controller
{
    public function actionRefreshScore()
    {
        $user = User::findOne(1);
        $current_game_progress = GameProgress::findOne($user->current_game_progress_id);
        $result = ['player_team_score' => $current_game_progress->player_team_score, 'enemy_team_score'=>$current_game_progress->enemy_team_score];
        return json_encode($result);
    }
    public function actionPlayerGoal() {
        $user = User::findOne(1);
        $current_game_progress = GameProgress::findOne($user->current_game_progress_id);
        $current_game_progress->player_team_score +=1;
        $current_game_progress->save();
    }
    public function actionEnemyGoal() {
        $user = User::findOne(1);
        $current_game_progress = GameProgress::findOne($user->current_game_progress_id);
        $current_game_progress->enemy_team_score +=1;
        $current_game_progress->save();
    }

}
