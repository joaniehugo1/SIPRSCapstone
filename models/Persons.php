<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persons".
 *
 * @property int $id
 * @property string $name
 * @property string $fathers_name
 * @property string $mothers_name
 * @property string $nationality
 * @property string $gender
 * @property string $birth_date
 * @property string $birth_place
 *
 * @property Baptism[] $baptisms
 * @property Confirmation[] $confirmations
 * @property Death[] $deaths
 * @property Marriage[] $marriages
 * @property Marriage[] $marriages0
 */
class Persons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birth_date'], 'safe'],
            [['name', 'fathers_name', 'mothers_name', 'nationality', 'gender', 'birth_place'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'fathers_name' => 'Fathers Name',
            'mothers_name' => 'Mothers Name',
            'nationality' => 'Nationality',
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaptisms()
    {
        return $this->hasMany(Baptism::className(), ['persons_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConfirmations()
    {
        return $this->hasMany(Confirmation::className(), ['persons_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeaths()
    {
        return $this->hasMany(Death::className(), ['persons_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarriages()
    {
        return $this->hasMany(Marriage::className(), ['groom_persons_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarriages0()
    {
        return $this->hasMany(Marriage::className(), ['bride_persons_id' => 'id']);
    }
}
