<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Confirmation */

$this->title = 'Update Confirmation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Confirmations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="confirmation-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
