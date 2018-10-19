<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "death".
 *
 * @property int $id
 * @property int $persons_id
 * @property string $death_date
 * @property string $buried
 * @property string $municipal_cemetery
 * @property string $cause_of_death
 * @property int $folio_no
 * @property int $book_no
 * @property int $page_no
 * @property string $certificate_date
 * @property string $parish_name
 * @property int $parish_priest
 *
 * @property Priest $parishPriest
 * @property Persons $persons
 */
class Death extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'death';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['persons_id', 'folio_no', 'book_no', 'page_no', 'parish_priest'], 'integer'],
            [['death_date', 'certificate_date'], 'safe'],
            [['parish_name', 'parish_priest'], 'required'],
            [['buried', 'municipal_cemetery', 'cause_of_death', 'parish_name'], 'string', 'max' => 255],
            [['parish_priest'], 'exist', 'skipOnError' => true, 'targetClass' => Priest::className(), 'targetAttribute' => ['parish_priest' => 'id']],
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
            'death_date' => 'Death Date',
            'buried' => 'Buried',
            'municipal_cemetery' => 'Municipal Cemetery',
            'cause_of_death' => 'Cause Of Death',
            'folio_no' => 'Folio No',
            'book_no' => 'Book No',
            'page_no' => 'Page No',
            'certificate_date' => 'Certificate Date',
            'parish_name' => 'Parish Name',
            'parish_priest' => 'Parish Priest',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParishPriest()
    {
        return $this->hasOne(Priest::className(), ['id' => 'parish_priest']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersons()
    {
        return $this->hasOne(Persons::className(), ['id' => 'persons_id']);
    }
}
