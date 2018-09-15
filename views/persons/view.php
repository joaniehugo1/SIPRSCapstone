<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Persons */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Persons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persons-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Baptize', ['baptism/create'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Confirm', ['confirmation/create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'fathers_name',
            'mothers_name',
            'nationality',
            'gender',
            'birth_date',
            'birth_place',
        ],
    ]) ?>

        

    <div>
        <table>
            <tr><th>Persons ID</th></tr>
            <tr><td><?= $baptism ?></td></tr>
        </table>
    </div>

    <?php 
            $baptismDetails = app\models\Baptism::findOne($baptism);
            echo $baptismDetails->baptism_date;
        ?>

</div>
