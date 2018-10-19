<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "priest".
 *
 * @property int $id
 * @property string $parish priest
 * @property string $priest_role 0=parish priest, 1=officiating priest
 */
class Priest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'priest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['priest_role'], 'required'],
            [['parish_priest', 'priest_role'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parish_priest' => 'Parish Priest',
            'priest_role' => 'Priest Role',
        ];
    }
}
