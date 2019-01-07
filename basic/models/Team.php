<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id ID команды
 * @property string $name Название команды
 *
 * @property Game[] $games
 * @property Game[] $games0
 * @property Gk[] $gks
 * @property Player[] $players
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames()
    {
        return $this->hasMany(Game::className(), ['enemy_team_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames0()
    {
        return $this->hasMany(Game::className(), ['player_team_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGks()
    {
        return $this->hasMany(Gk::className(), ['team_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayers()
    {
        return $this->hasMany(Player::className(), ['team_id' => 'id']);
    }
}
