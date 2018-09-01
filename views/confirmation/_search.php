<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConfirmationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="confirmation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'persons_id') ?>

    <?= $form->field($model, 'confirmation_date') ?>

    <?= $form->field($model, 'rev_monsignor') ?>

    <?php // echo $form->field($model, 'sponsors') ?>

    <?php // echo $form->field($model, 'confirmation_no') ?>

    <?php // echo $form->field($model, 'serial_no') ?>

    <?php // echo $form->field($model, 'page_no') ?>

    <?php // echo $form->field($model, 'given_date') ?>

    <?php // echo $form->field($model, 'parish_priest') ?>

    <?php // echo $form->field($model, 'solemnize_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
