<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Marriage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Marriages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marriage-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id,'groompersonsId'=> $model->groom_persons_id, 'bridepersonsId' => $model->bride_persons_id ], ['class' => 'btn btn-primary']) ?>
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
            'groom_persons_id',
            'bride_persons_id',
            'married_date',
            'solemnize_by',
            'sponsors',
            'residence',
            'book_no',
            'page_no',
            'line_no',
            'marriage_license_no',
            'issued_place',
            'issued_date',
            'exhibited_date',
            'parish_priest',
            'parish_name',
        ],
    ]) ?>

</div>
