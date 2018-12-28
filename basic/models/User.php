<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id id игрока
 * @property int $tour_id Id тура
 * @property int $game_id Id матча
 * @property int $current_game_progress_id Id состояния текущего матча
 *
 * @property GameProgress[] $gameProgresses
 * @property Game $game
 * @property Tour $tour
 * @property GameProgress $currentGameProgress
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tour_id', 'game_id', 'current_game_progress_id'], 'required'],
            [['tour_id', 'game_id', 'current_game_progress_id'], 'integer'],
            [['game_id'], 'exist', 'skipOnError' => true, 'targetClass' => Game::className(), 'targetAttribute' => ['game_id' => 'id']],
            [['tour_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['tour_id' => 'id']],
            [['current_game_progress_id'], 'exist', 'skipOnError' => true, 'targetClass' => GameProgress::className(), 'targetAttribute' => ['current_game_progress_id' => 'id']],
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
            'game_id' => 'Game ID',
            'current_game_progress_id' => 'Current Game Progress ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGameProgresses()
    {
        return $this->hasMany(GameProgress::className(), ['user_id' => 'id']);
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
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['id' => 'tour_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrentGameProgress()
    {
        return $this->hasOne(GameProgress::className(), ['id' => 'current_game_progress_id']);
    }
}
