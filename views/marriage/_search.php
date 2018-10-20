<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MarriageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marriage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'globalSearch') ?>
    <!-- <?= $form->field($model, 'groom_persons_id') ?> -->
    <!-- <?= $form->field($model, 'bride_persons_id') ?> -->
    <!-- <?= $form->field($model, 'married_date') ?> -->

    <?php // echo $form->field($model, 'solemnize_by') ?>

    <?php // echo $form->field($model, 'sponsors') ?>

    <?php // echo $form->field($model, 'residence') ?>

    <?php // echo $form->field($model, 'book_no') ?>

    <?php // echo $form->field($model, 'page_no') ?>

    <?php // echo $form->field($model, 'line_no') ?>

    <?php // echo $form->field($model, 'marriage_license_no') ?>

    <?php // echo $form->field($model, 'issued_place') ?>

    <?php // echo $form->field($model, 'issued_date') ?>

    <?php // echo $form->field($model, 'exhibited_date') ?>

    <?php // echo $form->field($model, 'parish_priest') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?> -->
    </div>

    <?php ActiveForm::end(); ?>

</div>
