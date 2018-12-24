<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gk".
 *
 * @property int $id
 * @property string $name
 * @property int $catc Поймать мяч
 * @property int $punch Отбить мяч
 * @property int $stop_drib Остановить ближнюю обводку
 * @property int $stop_shot Остановить ближний удар
 * @property int $high_jump Высокий прыжок
 * @property int $low_jump Низкий прыжок
 * @property int $power Выносливость
 * @property int $exp Опыт
 * @property int $lvl Уровень
 *
 * @property Team[] $teams
 */
class Gk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'catc', 'punch', 'stop_drib', 'stop_shot', 'high_jump', 'low_jump', 'power'], 'required'],
            [['catc', 'punch', 'stop_drib', 'stop_shot', 'high_jump', 'low_jump', 'power', 'exp', 'lvl'], 'integer'],
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
            'catc' => 'Catc',
            'punch' => 'Punch',
            'stop_drib' => 'Stop Drib',
            'stop_shot' => 'Stop Shot',
            'high_jump' => 'High Jump',
            'low_jump' => 'Low Jump',
            'power' => 'Power',
            'exp' => 'Exp',
            'lvl' => 'Lvl',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams()
    {
        return $this->hasMany(Team::className(), ['gk' => 'id']);
    }
}
