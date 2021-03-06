<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Baptism */

$this->title = 'Update Baptism: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Baptisms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="baptism-update">

    <?= $this->render('_form', [
        'model' => $model, 'persons' => $persons, 'priest' => $priest
    ]) ?>

</div>
