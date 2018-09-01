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

    <?php // echo $form->field($model, 'receive_the_last_sacrament_of') ?>

    <?php // echo $form->field($model, 'confession_extreme') ?>

    <?php // echo $form->field($model, 'unction_and_holy_vaticum') ?>

    <?php // echo $form->field($model, 'receive_any_sacrament') ?>

    <?php // echo $form->field($model, 'folio_no') ?>

    <?php // echo $form->field($model, 'book_no') ?>

    <?php // echo $form->field($model, 'page_name') ?>

    <?php // echo $form->field($model, 'parish_name') ?>

    <?php // echo $form->field($model, 'certificate_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
