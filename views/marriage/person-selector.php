<?php

use yii\helpers\Html;
use app\models\Marriage;


/* @var $this yii\web\View */
/* @var $model app\models\Marriage */

$this->title = 'Choose Husband and Wife';
$this->params['breadcrumbs'][] = ['label' => 'Marriages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-create">

    <?= $this->render('_person-form-selector', [
        'model' => $model, 
    ]) ?>

</div>