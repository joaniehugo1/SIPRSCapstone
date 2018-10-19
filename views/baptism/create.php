<?php

use yii\helpers\Html;



/* @var $this yii\web\View */
/* @var $model app\models\Baptism */

$this->title = 'Create Baptism';
$this->params['breadcrumbs'][] = ['label' => 'Baptisms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baptism-create">

    <?= $this->render('_form', [
        'model' => $model, 'persons' => $persons, 'priest' => $priest
    ]) ?>

</div>
