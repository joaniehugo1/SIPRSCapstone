<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PriestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Priests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priest-index">

    <p>
        <?= Html::a('Create Priest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            'id',
            'parish_priest',
            'priest_role',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
