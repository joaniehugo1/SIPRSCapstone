<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marriage".
 *
 * @property int $id
 * @property string $parish_name
 * @property int $groom_persons_id
 * @property int $bride_persons_id
 * @property string $married_date
 * @property string $solemnize_by
 * @property string $sponsors
 * @property string $residence
 * @property int $book_no
 * @property int $page_no
 * @property int $line_no
 * @property string $marriage_license_no
 * @property string $issued_place
 * @property string $issued_date
 * @property string $exhibited_date
 * @property string $parish_priest
 *
 * @property Persons $groomPersons
 * @property Persons $bridePersons
 */
class Marriage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marriage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['groom_persons_id', 'bride_persons_id', 'book_no', 'page_no', 'line_no'], 'integer'],
            [['married_date', 'issued_date', 'exhibited_date'], 'safe'],
            [['parish_name', 'solemnize_by', 'residence', 'parish_priest'], 'string', 'max' => 255],
            [['sponsors'], 'string', 'max' => 225],
            [['marriage_license_no'], 'string', 'max' => 100],
            [['issued_place'], 'string', 'max' => 500],
            [['groom_persons_id'], 'exist', 'skipOnError' => true, 'targetClass' => Persons::className(), 'targetAttribute' => ['groom_persons_id' => 'id']],
            [['bride_persons_id'], 'exist', 'skipOnError' => true, 'targetClass' => Persons::className(), 'targetAttribute' => ['bride_persons_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parish_name' => 'Parish Name',
            'groom_persons_id' => 'Groom Persons ID',
            'bride_persons_id' => 'Bride Persons ID',
            'married_date' => 'Married Date',
            'solemnize_by' => 'Solemnize By',
            'sponsors' => 'Sponsors',
            'residence' => 'Residence',
            'book_no' => 'Book No',
            'page_no' => 'Page No',
            'line_no' => 'Line No',
            'marriage_license_no' => 'Marriage License No',
            'issued_place' => 'Issued Place',
            'issued_date' => 'Issued Date',
            'exhibited_date' => 'Exhibited Date',
            'parish_priest' => 'Parish Priest',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroomPersons()
    {
        return $this->hasOne(Persons::className(), ['id' => 'groom_persons_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBridePersons()
    {
        return $this->hasOne(Persons::className(), ['id' => 'bride_persons_id']);
    }
}
