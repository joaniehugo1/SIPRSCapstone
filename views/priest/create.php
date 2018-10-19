<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Priest */

$this->title = 'Create Priest';
$this->params['breadcrumbs'][] = ['label' => 'Priests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priest-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
