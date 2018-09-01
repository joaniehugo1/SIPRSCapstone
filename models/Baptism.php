<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "baptism".
 *
 * @property int $id
 * @property string $parish_name
 * @property int $persons_id
 * @property string $god_parents
 * @property string $officiating_priest
 * @property string $parish_priest
 * @property int $book_no
 * @property int $page_no
 * @property int $serial_no
 * @property string $baptism_date
 * @property string $baptism_place
 *
 * @property Persons $persons
 */
class Baptism extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'baptism';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['persons_id', 'book_no', 'page_no', 'serial_no'], 'integer'],
            [['baptism_date'], 'safe'],
            [['god_parents', 'officiating_priest', 'parish_priest', 'baptism_place'], 'string', 'max' => 255],
            [['persons_id'], 'exist', 'skipOnError' => true, 'targetClass' => Persons::className(), 'targetAttribute' => ['persons_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'persons_id' => 'Persons ID',
            'god_parents' => 'God Parents',
            'officiating_priest' => 'Officiating Priest',
            'parish_priest' => 'Parish Priest',
            'book_no' => 'Book No',
            'page_no' => 'Page No',
            'serial_no' => 'Serial No',
            'baptism_date' => 'Baptism Date',
            'baptism_place' => 'Baptism Place',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersons()
    {
        return $this->hasOne(Persons::className(), ['id' => 'persons_id']);
    }
}
