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
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'class' => 'table table-stripped table-hover',
        ],
        // 'filterModel' => $searchModel,
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
