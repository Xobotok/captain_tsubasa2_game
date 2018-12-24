<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id ID команды
 * @property string $name Название команды
 * @property int $gk Вратарь
 * @property int $no2 Игрок
 * @property int $no3 Игрок
 * @property int $no4 Игрок
 * @property int $no5 Игрок
 * @property int $no6 Игрок
 * @property int $no7 Игрок
 * @property int $no8 Игрок
 * @property int $no9 Игрок
 * @property int $no10 Игрок
 * @property int $no11 Игрок
 * @property int $control Команда управляется игроком (1) или компьютером (0)
 *
 * @property Gk $gk0
 * @property Player $no100
 * @property Player $no110
 * @property Player $no20
 * @property Player $no30
 * @property Player $no40
 * @property Player $no50
 * @property Player $no60
 * @property Player $no70
 * @property Player $no80
 * @property Player $no90
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
            [['name', 'gk', 'no2', 'no3', 'no4', 'no5', 'no6', 'no7', 'no8', 'no9', 'no10', 'no11'], 'required'],
            [['gk', 'no2', 'no3', 'no4', 'no5', 'no6', 'no7', 'no8', 'no9', 'no10', 'no11'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['control'], 'string', 'max' => 1],
            [['gk'], 'exist', 'skipOnError' => true, 'targetClass' => Gk::className(), 'targetAttribute' => ['gk' => 'id']],
            [['no10'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no10' => 'id']],
            [['no11'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no11' => 'id']],
            [['no2'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no2' => 'id']],
            [['no3'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no3' => 'id']],
            [['no4'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no4' => 'id']],
            [['no5'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no5' => 'id']],
            [['no6'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no6' => 'id']],
            [['no7'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no7' => 'id']],
            [['no8'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no8' => 'id']],
            [['no9'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['no9' => 'id']],
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
            'gk' => 'Gk',
            'no2' => 'No2',
            'no3' => 'No3',
            'no4' => 'No4',
            'no5' => 'No5',
            'no6' => 'No6',
            'no7' => 'No7',
            'no8' => 'No8',
            'no9' => 'No9',
            'no10' => 'No10',
            'no11' => 'No11',
            'control' => 'Control',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGk()
    {
        return $this->hasOne(Gk::className(), ['id' => 'gk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo10()
    {
        return $this->hasOne(Player::className(), ['id' => 'no10']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo11()
    {
        return $this->hasOne(Player::className(), ['id' => 'no11']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo2()
    {
        return $this->hasOne(Player::className(), ['id' => 'no2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo3()
    {
        return $this->hasOne(Player::className(), ['id' => 'no3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo4()
    {
        return $this->hasOne(Player::className(), ['id' => 'no4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo5()
    {
        return $this->hasOne(Player::className(), ['id' => 'no5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo6()
    {
        return $this->hasOne(Player::className(), ['id' => 'no6']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo7()
    {
        return $this->hasOne(Player::className(), ['id' => 'no7']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo8()
    {
        return $this->hasOne(Player::className(), ['id' => 'no8']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNo9()
    {
        return $this->hasOne(Player::className(), ['id' => 'no9']);
    }
}
