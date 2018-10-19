<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Marriage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marriage-form">
        <h1>Person ID: <?= $persons->id ?> | Person Name: <?= $persons->name ?></h1>
        <h4>Parish Priest: <?= $priest->parish_priest ?></h4>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'groom_persons_id')->textInput() ?>

    <?= $form->field($model, 'bride_persons_id')->textInput() ?>

    <?= $form->field($model, 'married_date')->widget(
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

    <?= $form->field($model, 'solemnize_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsors')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'residence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_no')->textInput() ?>

    <?= $form->field($model, 'page_no')->textInput() ?>

    <?= $form->field($model, 'line_no')->textInput() ?>

    <?= $form->field($model, 'marriage_license_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issued_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issued_date')->widget(
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

    <?= $form->field($model, 'exhibited_date')->widget(
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
