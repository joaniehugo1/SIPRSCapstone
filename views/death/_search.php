<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeathSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="death-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'persons_id') ?>

    <?= $form->field($model, 'death_date') ?>

    <?= $form->field($model, 'buried') ?>

    <?= $form->field($model, 'municipal_cemetery') ?>

    <?php // echo $form->field($model, 'cause_of_death') ?>

    <?php // echo $form->field($model, 'folio_no') ?>

    <?php // echo $form->field($model, 'book_no') ?>

    <?php // echo $form->field($model, 'page_no') ?>

    <?php // echo $form->field($model, 'certificate_date') ?>

    <?php // echo $form->field($model, 'parish_priest') ?>

    <?php // echo $form->field($model, 'parish_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
