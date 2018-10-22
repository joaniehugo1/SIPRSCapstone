<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use app\models\Death;

/* @var $this yii\web\View */
/* @var $model app\models\Death */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="death-form">

<div class='panel panel-success'>
            <h1>Person ID: <?= $persons->id ?> | Person Name: <?= $persons->name ?></h1>
            <h4>Parish Priest: <?= $priest->parish_priest ?></h4>
        </div>

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'death_date')->textInput()->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]); ?>

    <?= $form->field($model, 'buried')->textInput()->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]); ?>

    <?= $form->field($model, 'cause_of_death')->textInput(['maxlength'=> 90, 'minlength' => 2,'required' =>  true]) ?>

    <?= $form->field($model, 'folio_no')->textInput() ?>

    <?= $form->field($model, 'book_no')->textInput() ?>

    <?= $form->field($model, 'page_no')->textInput() ?>

    <?= $form->field($model, 'certificate_date')->textInput()->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]); ?>
    <?= $form->field($model, 'municipal_cemetery')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
