<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DeathSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deaths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="death-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Death', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                'id',
                'persons_id',
                'death_date',
                'buried',
                // 'municipal_cemetery',
            //'cause_of_death',
            //'receive_the_last_sacrament_of',
            //'confession_extreme',
            //'unction_and_holy_vaticum',
            //'receive_any_sacrament',
            //'folio_no',
            //'book_no',
            //'page_name',
            //'parish_name',
            //'certificate_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
