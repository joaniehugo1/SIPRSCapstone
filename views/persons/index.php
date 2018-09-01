<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Persons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persons-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            'fathers_name',
            'mothers_name',
            // 'nationality',
            //'gender',
            //'birth_date',
            //'birth_place',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
