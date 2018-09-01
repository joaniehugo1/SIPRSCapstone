<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Marriage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marriage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'groom_persons_id')->textInput() ?>

    <?= $form->field($model, 'bride_persons_id')->textInput() ?>

    <?= $form->field($model, 'married_date')->textInput() ?>

    <?= $form->field($model, 'solemnize_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_no')->textInput() ?>

    <?= $form->field($model, 'page_no')->textInput() ?>

    <?= $form->field($model, 'line_no')->textInput() ?>

    <?= $form->field($model, 'marriage_license_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issued_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issued_date')->textInput() ?>

    <?= $form->field($model, 'exhibited_date')->textInput() ?>

    <?= $form->field($model, 'parish_priest')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>