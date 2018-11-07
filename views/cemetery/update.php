<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cemetery */

$this->title = 'Update Cemetery: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cemeteries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cemetery-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
