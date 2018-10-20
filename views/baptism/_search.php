<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BaptismSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baptism-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

     <?= $form->field($model, 'globalSearch') ?>
    <!-- <?= $form->field($model, 'persons_id') ?> -->
    <!-- <?= $form->field($model, 'god_parents') ?> -->
    <!-- <?= $form->field($model, 'officiating_priest') ?> -->

    <?php // echo $form->field($model, 'parish_priest') ?>

    <?php // echo $form->field($model, 'book_no') ?>

    <?php // echo $form->field($model, 'page_no') ?>

    <?php // echo $form->field($model, 'serial_no') ?>

    <?php // echo $form->field($model, 'baptism_date') ?>

    <?php // echo $form->field($model, 'baptism_place') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
