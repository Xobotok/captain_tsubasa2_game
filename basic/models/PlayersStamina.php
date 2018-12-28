<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "players_stamina".
 *
 * @property int $game_progress_id Id матча
 * @property int $player_id Id игрока
 * @property int $player_stamina Выносливость игрока
 */
class PlayersStamina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'players_stamina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_progress_id', 'player_id', 'player_stamina'], 'required'],
            [['game_progress_id', 'player_id', 'player_stamina'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'game_progress_id' => 'Game Progress ID',
            'player_id' => 'Player ID',
            'player_stamina' => 'Player Stamina',
        ];
    }
}
