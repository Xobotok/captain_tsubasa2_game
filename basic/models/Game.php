<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game".
 *
 * @property int $id
 * @property int $tour_id
 * @property int $player_team_id
 * @property int $enemy_team_id
 *
 * @property Team $enemyTeam
 * @property Team $playerTeam
 * @property Tour $tour
 * @property User[] $users
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tour_id', 'player_team_id', 'enemy_team_id'], 'required'],
            [['id', 'tour_id', 'player_team_id', 'enemy_team_id'], 'integer'],
            [['id'], 'unique'],
            [['enemy_team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['enemy_team_id' => 'id']],
            [['player_team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['player_team_id' => 'id']],
            [['tour_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['tour_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tour_id' => 'Tour ID',
            'player_team_id' => 'Player Team ID',
            'enemy_team_id' => 'Enemy Team ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnemyTeam()
    {
        return $this->hasOne(Team::className(), ['id' => 'enemy_team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerTeam()
    {
        return $this->hasOne(Team::className(), ['id' => 'player_team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['id' => 'tour_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['game_id' => 'id']);
    }
}
