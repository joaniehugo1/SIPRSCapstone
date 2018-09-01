<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "confirmation".
 *
 * @property int $id
 * @property string $parish_name
 * @property int $persons_id
 * @property string $confirmation_date
 * @property string $rev_monsignor
 * @property string $sponsors
 * @property int $confirmation_no
 * @property int $serial_no
 * @property int $page_no
 * @property string $given_date
 * @property string $parish_priest
 * @property string $solemnize_by
 *
 * @property Persons $persons
 */
class Confirmation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'confirmation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['persons_id', 'confirmation_no', 'serial_no', 'page_no'], 'integer'],
            [['confirmation_date', 'given_date'], 'safe'],
            [['rev_monsignor', 'sponsors', 'parish_priest', 'solemnize_by'], 'string', 'max' => 255],
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
            'confirmation_date' => 'Confirmation Date',
            'rev_monsignor' => 'Rev Monsignor',
            'sponsors' => 'Sponsors',
            'confirmation_no' => 'Confirmation No',
            'serial_no' => 'Serial No',
            'page_no' => 'Page No',
            'given_date' => 'Given Date',
            'parish_priest' => 'Parish Priest',
            'solemnize_by' => 'Solemnize By',
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
