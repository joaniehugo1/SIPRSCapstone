<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use app\models\Persons;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use app\models\Marriage;

/* @var $this yii\web\View */
/* @var $model app\models\Marriage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marriage-form">

    <?php
        $husband = Persons::find()->where(['gender' => 'Male'])
        ->andWhere(['not in','id',
        (new Query())
            ->select('groom_persons_id')
            ->from(Marriage::tableName())
            ])
        ->all();
        $wife = Persons::find()->where(['gender' => 'Female'])
        ->andWhere(['not in','id',
        (new Query())
            ->select('bride_persons_id')
            ->from(Marriage::tableName())
            ])
        ->all();    

        $husbandsList = ArrayHelper::map($husband, 'id', 'name');
        $wifeList = ArrayHelper::map($wife, 'id', 'name');
    ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'groom_persons_id')->dropDownList($husbandsList) ?>

    <?= $form->field($model, 'bride_persons_id')->dropDownList($wifeList) ?>

    <div class="form-group">
        <?= Html::submitButton('Proceed', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
