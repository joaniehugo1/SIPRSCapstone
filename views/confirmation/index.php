<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConfirmationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Confirmations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="confirmation-index">
    
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            'id',
            'persons_id',
            'confirmation_date',
            'rev_monsignor',
            //'sponsors',
            //'confirmation_no',
            //'serial_no',
            //'page_no',
            //'given_date',
            //'parish_priest',
            //'solemnize_by',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
