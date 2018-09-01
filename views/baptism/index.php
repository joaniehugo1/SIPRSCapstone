<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BaptismSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Baptisms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baptism-index">
    <p>
        <?= Html::a('Create Baptism', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'persons_id',
            'god_parents',
            'officiating_priest',
            //'parish_priest',
            //'book_no',
            //'page_no',
            //'serial_no',
            //'baptism_date',
            //'baptism_place',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
