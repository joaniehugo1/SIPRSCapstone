<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Confirmation */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Confirmations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="confirmation-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'personsId' => $model->persons_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'persons_id',
            'confirmation_date',
            'rev_monsignor',
            'sponsors',
            'confirmation_no',
            'serial_no',
            'page_no',
            'given_date',
            'parish_priest',
        ],
    ]) ?>

</div>
