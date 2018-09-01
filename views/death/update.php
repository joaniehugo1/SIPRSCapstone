<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Death */

$this->title = 'Update Death: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deaths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="death-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
