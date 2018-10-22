<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PriestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priest-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

      <?= $form->field($model, 'globalSearch') ?>
    <!-- <?= $form->field($model, 'parish_priest') ?> -->
    <!-- <?= $form->field($model, 'priest_role') ?> -->

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
