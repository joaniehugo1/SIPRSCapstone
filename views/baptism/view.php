<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Baptism */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Baptisms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baptism-view">

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
            'god_parents',
            'officiating_priest',
            'parish_priest',
            'book_no',
            'page_no',
            'serial_no',
            'baptism_date',
            'baptism_place',
            'parish_name',
        ],
    ]) ?>

</div>
