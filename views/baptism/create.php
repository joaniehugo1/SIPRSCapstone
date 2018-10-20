<?php

use yii\helpers\Html;
use app\models\Baptism;


/* @var $this yii\web\View */
/* @var $model app\models\Baptism */

$this->title = 'Create Baptism';
$this->params['breadcrumbs'][] = ['label' => 'Baptisms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baptism-create">
    <?php
        $baptismValidation = Baptism::find()->where(['persons_id' => $persons->id])->count();
        
        if ($baptismValidation >= 1) {
           echo "<h1>Person already baptized.</h1>";
        }else{
            echo $this->render('_form', [
                'model' => $model, 'persons' => $persons, 'priest' => $priest
            ]);
        }
    ?>

</div>
