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
 * @property string $receive_the_last_sacrament_of
 * @property string $confession_extreme
 * @property string $unction_and_holy_vaticum
 * @property string $receive_any_sacrament
 * @property int $folio_no
 * @property int $book_no
 * @property string $page_name
 * @property string $parish_name
 * @property string $certificate_date
 *
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
            [['persons_id', 'folio_no', 'book_no'], 'integer'],
            [['death_date', 'certificate_date'], 'safe'],
            [['buried', 'municipal_cemetery', 'cause_of_death', 'receive_the_last_sacrament_of', 'confession_extreme', 'unction_and_holy_vaticum', 'receive_any_sacrament', 'page_name', 'parish_name'], 'string', 'max' => 255],
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
            'receive_the_last_sacrament_of' => 'Receive The Last Sacrament Of',
            'confession_extreme' => 'Confession Extreme',
            'unction_and_holy_vaticum' => 'Unction And Holy Vaticum',
            'receive_any_sacrament' => 'Receive Any Sacrament',
            'folio_no' => 'Folio No',
            'book_no' => 'Book No',
            'page_name' => 'Page Name',
            'parish_name' => 'Parish Name',
            'certificate_date' => 'Certificate Date',
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
