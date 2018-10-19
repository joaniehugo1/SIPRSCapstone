<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Death */

$this->title = 'Create Death';
$this->params['breadcrumbs'][] = ['label' => 'Deaths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="death-create">

    <?= $this->render('_form', [
        'model' => $model, 'persons' => $persons, 'priest' => $priest
    ]) ?>

</div>
