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
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            'id',
            'persons_id',
            'death_date',
            'buried',
            'municipal_cemetery',
            //'cause_of_death',
            //'folio_no',
            //'book_no',
            //'page_no',
            //'certificate_date',
            //'parish_priest',
            //'parish_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
