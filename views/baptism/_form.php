<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Baptism;
use app\models\Priest;
use app\models\Persons;


/* @var $this yii\web\View */
/* @var $model app\models\Baptism */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baptism-form">
<div class='panel panel-success'>
            <h1>Person ID: <?= $persons->id ?> | Person Name: <?= $persons->name ?></h1>
            <h4>Parish Priest: <?= $priest->parish_priest ?></h4>
        </div>
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'god_parents')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'officiating_priest')->dropDownList(
        ArrayHelper::map(Priest::find()->all(),'id','parish_priest'),['prompt'=>'Select']
    ) ?>

    <?= $form->field($model, 'book_no')->textInput() ?>

    <?= $form->field($model, 'page_no')->textInput() ?>

    <?= $form->field($model, 'serial_no')->textInput() ?>

    <?= $form->field($model, 'parish_name')->textInput() ?>

    <?= $form->field($model, 'baptism_date')->widget(
        DatePicker::className(), [
                // inline too, not bad
                'inline' => false, 
                // modify template for custom rendering
                //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
        ]);?>

    <?= $form->field($model, 'baptism_place')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
