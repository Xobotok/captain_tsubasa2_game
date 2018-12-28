<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "player".
 *
 * @property int $id ID игрока
 * @property string $name Имя игрока
 * @property int $dribble Навык ведения меча
 * @property int $pass Навык паса
 * @property int $shot Навык удара с земли
 * @property int $tack Навык подката
 * @property int $block Навык блока удара
 * @property int $cut Навык перехвата паса
 * @property int $high_trap Навык принятия высокого мяча
 * @property int $high_shot Навык высокого удара
 * @property int $high_throw Навык высокой обманки
 * @property int $high_clear Навык высоко выбивания мяча
 * @property int $low_trap Навык низкого принятия мяча
 * @property int $low_shot Навык низкого удара мяча
 * @property int $low_throw Навык низкой обманки
 * @property int $low_clear Навык низкого выбивания мяча
 * @property int $power Количество выносливости
 * @property int $number Номер игрока
 * @property int $lvl Уровень игрока
 * @property int $exp Опыт игрока
 * @property int $team_id ID команды, в которой играет игрок
 *
 * @property Team $team
 * @property PlayersStamina[] $playersStaminas
 * @property Team[] $teams
 * @property Team[] $teams0
 * @property Team[] $teams1
 * @property Team[] $teams2
 * @property Team[] $teams3
 * @property Team[] $teams4
 * @property Team[] $teams5
 * @property Team[] $teams6
 * @property Team[] $teams7
 * @property Team[] $teams8
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dribble', 'pass', 'shot', 'tack', 'block', 'cut', 'high_trap', 'high_shot', 'high_throw', 'high_clear', 'low_trap', 'low_shot', 'low_throw', 'low_clear', 'power', 'number', 'team_id'], 'required'],
            [['dribble', 'pass', 'shot', 'tack', 'block', 'cut', 'high_trap', 'high_shot', 'high_throw', 'high_clear', 'low_trap', 'low_shot', 'low_throw', 'low_clear', 'power', 'number', 'lvl', 'exp', 'team_id'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_id' => 'id']],
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
            'dribble' => 'Dribble',
            'pass' => 'Pass',
            'shot' => 'Shot',
            'tack' => 'Tack',
            'block' => 'Block',
            'cut' => 'Cut',
            'high_trap' => 'High Trap',
            'high_shot' => 'High Shot',
            'high_throw' => 'High Throw',
            'high_clear' => 'High Clear',
            'low_trap' => 'Low Trap',
            'low_shot' => 'Low Shot',
            'low_throw' => 'Low Throw',
            'low_clear' => 'Low Clear',
            'power' => 'Power',
            'number' => 'Number',
            'lvl' => 'Lvl',
            'exp' => 'Exp',
            'team_id' => 'Team ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Team::className(), ['id' => 'team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayersStaminas()
    {
        return $this->hasMany(PlayersStamina::className(), ['player_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams()
    {
        return $this->hasMany(Team::className(), ['no10' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams0()
    {
        return $this->hasMany(Team::className(), ['no11' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams1()
    {
        return $this->hasMany(Team::className(), ['no2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams2()
    {
        return $this->hasMany(Team::className(), ['no3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams3()
    {
        return $this->hasMany(Team::className(), ['no4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams4()
    {
        return $this->hasMany(Team::className(), ['no5' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams5()
    {
        return $this->hasMany(Team::className(), ['no6' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams6()
    {
        return $this->hasMany(Team::className(), ['no7' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams7()
    {
        return $this->hasMany(Team::className(), ['no8' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams8()
    {
        return $this->hasMany(Team::className(), ['no9' => 'id']);
    }
}
