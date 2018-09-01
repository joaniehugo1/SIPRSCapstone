<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Baptism */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baptism-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'persons_id')->textInput() ?>

    <?= $form->field($model, 'god_parents')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'officiating_priest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parish_priest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_no')->textInput() ?>

    <?= $form->field($model, 'page_no')->textInput() ?>

    <?= $form->field($model, 'serial_no')->textInput() ?>

    <?= $form->field($model, 'baptism_date')->textInput() ?>

    <?= $form->field($model, 'baptism_place')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
