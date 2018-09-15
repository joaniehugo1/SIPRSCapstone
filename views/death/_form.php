<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Death */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="death-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'persons_id')->textInput() ?>

    <?= $form->field($model, 'death_date')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-mm-yyyy'
            ]
    ]);?>

    <?= $form->field($model, 'buried')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'municipal_cemetery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cause_of_death')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receive_the_last_sacrament_of')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confession_extreme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unction_and_holy_vaticum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receive_any_sacrament')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'folio_no')->textInput() ?>

    <?= $form->field($model, 'book_no')->textInput() ?>

    <?= $form->field($model, 'page_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parish_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_date')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-mm-yyyy'
            ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
