<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marriage */

$this->title = 'Update Marriage: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Marriages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marriage-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
