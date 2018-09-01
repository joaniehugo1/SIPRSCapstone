<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Confirmation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="confirmation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'persons_id')->textInput() ?>

    <?= $form->field($model, 'confirmation_date')->textInput() ?>

    <?= $form->field($model, 'rev_monsignor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sponsors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmation_no')->textInput() ?>

    <?= $form->field($model, 'serial_no')->textInput() ?>

    <?= $form->field($model, 'page_no')->textInput() ?>

    <?= $form->field($model, 'given_date')->textInput() ?>

    <?= $form->field($model, 'parish_priest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'solemnize_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
