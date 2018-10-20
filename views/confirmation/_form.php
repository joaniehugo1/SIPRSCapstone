<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use app\models\Confirmation;

/* @var $this yii\web\View */
/* @var $model app\models\Confirmation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="confirmation-form">

    <div class='panel panel-success'>
            <h1>Person ID: <?= $persons->id ?> | Person Name: <?= $persons->name ?></h1>
            <h4>Parish Priest: <?= $priest->parish_priest ?></h4>
        </div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'confirmation_date')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'rev_monsignor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsors')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmation_no')->textInput() ?>

    <?= $form->field($model, 'serial_no')->textInput() ?>

    <?= $form->field($model, 'page_no')->textInput() ?>

    <?= $form->field($model, 'parish_priest')->textInput() ?>

    <?= $form->field($model, 'given_date')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
