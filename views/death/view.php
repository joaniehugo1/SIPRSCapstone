<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Death */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deaths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="death-view">

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
            'death_date',
            'buried',
            'municipal_cemetery',
            'cause_of_death',
            'folio_no',
            'book_no',
            'page_no',
            'certificate_date',
            'parish_name',
        ],
    ]) ?>

</div>
