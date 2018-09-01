<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Confirmation */

$this->title = 'Create Confirmation';
$this->params['breadcrumbs'][] = ['label' => 'Confirmations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="confirmation-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
