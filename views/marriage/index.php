<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarriageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marriages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marriage-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Marriage', ['person-selector'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'class' => 'table table-stripped table-hover',
        ],
        // 'filterModel' => $searchModel,
        'columns' => [
            'id',
            'groom_persons_id',
            'bride_persons_id',
            'married_date',
            //'solemnize_by',
            //'sponsors',
            //'residence',
            //'book_no',
            //'page_no',
            //'line_no',
            //'marriage_license_no',
            //'issued_place',
            //'issued_date',
            //'exhibited_date',
            //'parish_priest',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
