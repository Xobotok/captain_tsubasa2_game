<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game_progress".
 *
 * @property int $id Id матча
 * @property int $user_id ID пользователя
 * @property int $game_id ID игры
 * @property int $player_team_score Счёт команды игрока
 * @property int $enemy_team_score счет команды противника
 *
 * @property Game $game
 * @property User $user
 * @property PlayersStamina[] $playersStaminas
 * @property User[] $users
 */
class GameProgress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game_progress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'game_id', 'player_team_score', 'enemy_team_score'], 'required'],
            [['user_id', 'game_id', 'player_team_score', 'enemy_team_score'], 'integer'],
            [['game_id'], 'exist', 'skipOnError' => true, 'targetClass' => Game::className(), 'targetAttribute' => ['game_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'game_id' => 'Game ID',
            'player_team_score' => 'Player Team Score',
            'enemy_team_score' => 'Enemy Team Score',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGame()
    {
        return $this->hasOne(Game::className(), ['id' => 'game_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayersStaminas()
    {
        return $this->hasMany(PlayersStamina::className(), ['game_progress_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['current_game_progress_id' => 'id']);
    }
}
