<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cemetery */

$this->title = 'Create Cemetery';
$this->params['breadcrumbs'][] = ['label' => 'Cemeteries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cemetery-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
