<?php
use yii\helpers\Html;


?>
<?php $this->head() ?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => 'print()']) ?>

<div>

    <h4 class='test-class' style='text-align: center; margin-top: 1px;'>Julio Lopez</h4>

    <div class='col-sm-2'>
        <h4 class='akong-papa'>Papa Lopez</h4>
        <h4 class='dateOfBirth'>May 28, 1992</h4>
        <h4 class='dateOfBaptism'>November 1, 2050</h4>
    </div>

    <div class='col-sm-2'>
        <h4 class='mama-naku'>Mama Lopez</h4>
        <h4 class='address'>Pooc Oriental, Tubigon</h4>
        <h4 class='parish'>St. Isidore Parish, Tubigon</h4>
    </div>
</div>

<div>

    <div class='col-sm-6'>
        <h4 class='joanie-hugo'>Joanie Hugo</h4>
        <h4 class='christian-labtan'>Christian Labtan</h4>
        <h4 class='rose-marilou'>Rose Marilou</h4>
    </div>

    <div class='col-sm-6'>
        <h4 class='james-orfano'>James Orfano</h4>
        <h4 class='jan-rey'>Jan Rey</h4>
        <h4 class='bob-by'>Bob By</h4>
    </div>
</div>

<div>
<h4 class='test-class' style='text-align: center; margin-top: 1px;'>Rev.Fr.Christian Gee Lagria</h4>
</div>

<div>
        <h4 class='book-no'>Book No. </h4>
        <h4 class='page-no'>Page No.</h4>
        <h4 class='serial-no'>Serial No.</h4>
</div>


