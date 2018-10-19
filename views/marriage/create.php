<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Marriage */

$this->title = 'Create Marriage';
$this->params['breadcrumbs'][] = ['label' => 'Marriages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marriage-create">

    <?= $this->render('_form', [
        'model' => $model, 'persons' => $persons, 'priest' => $priest
    ]) ?>

</div>
