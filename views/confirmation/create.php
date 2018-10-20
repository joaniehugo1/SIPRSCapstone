<?php

use yii\helpers\Html;
use app\models\Confirmation;

/* @var $this yii\web\View */
/* @var $model app\models\Confirmation */

$this->title = 'Create Confirmation';
$this->params['breadcrumbs'][] = ['label' => 'Confirmations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="confirmation-create">

    <?php
        $confirmationValidation = Confirmation::find()->where(['persons_id' => $persons->id])->count();
        
        if ($confirmationValidation >= 1) {
           echo "<h1>Person already confirm.</h1>";
        }else{
            echo $this->render('_form', [
                'model' => $model, 'persons' => $persons, 'priest' => $priest
            ]);
        }
        
    ?>

</div>
