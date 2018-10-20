<?php

use yii\helpers\Html;
use app\models\Death;


/* @var $this yii\web\View */
/* @var $model app\models\Death */

$this->title = 'Create Death';
$this->params['breadcrumbs'][] = ['label' => 'Deaths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="death-create">

    <?php
        $deathValidation = Death::find()->where(['persons_id' => $persons->id])->count();
        
        if ($deathValidation >= 1) {
           echo "<h1>Persons already have death records.</h1>";
        }else{
            echo $this->render('_form', [
                'model' => $model, 'persons' => $persons, 'priest' => $priest
            ]);
        }
        
    ?>

</div>
