<?php

use yii\helpers\Html;
use app\models\Marriage;
use app\models\Persons;

/* @var $this yii\web\View */
/* @var $model app\models\Marriage */

$this->title = 'Create Marriage';
$this->params['breadcrumbs'][] = ['label' => 'Marriages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marriage-create">

    <div class='jumbotron'>
        <h3>Groom: <?= Persons::findOne($model->groom_persons_id)->name ?></h3>
        <h3>Bride: <?= Persons::findOne($model->bride_persons_id)->name ?></h3>
    </div>

    <?php

        echo $this->render('_form', [
            'model' => $model, 'groom_persons_id' => $model->groom_persons_id, 'bride_persons_id' => $model->bride_persons_id
        ]);
        
    ?>

</div>
