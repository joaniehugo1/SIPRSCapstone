<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Persons */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persons-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fathers_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothers_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
