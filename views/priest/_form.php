<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Priest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parish_priest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priest_role')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
