<?php
use yii\helpers\Html;


?>
<?php $this->head() ?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => 'print()']) ?>
   </script>
<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Grade Pdf</title>
  </head>
  <body>
      <div class="student-grade-pdf">
        <div class="header">
          <img src="C:\xampp\htdocs\mdcstudentportal\public\images\school-logo2.png" alt="">
          <h4 style='text-align: center; margin-top: 1px;'></h4>
          <label>Tubigon,Bohol.</label>
          <br><br>
          <h5>GRADES</h5>
          <label>1st Sem AY 2015-2016</label>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="student-info">
          <div class="name-address">
            <label>Name : {{$student->fname}} , {{$student->lname}} {{$student->mi}}</label>
            <label class="student-no">Student No : {{$student->idnum}}</label>
          </div>
          <div class="idnum-course">
            <label>Adress :  {{$student->addb}} , {{$student->addt}} ,{{$student->addp}}.</label>
            <label class="course-year">Course & Year : {{$course[0]->cr_acrnm}} - {{$course[0]->pivot->year}}</label>
          </div>
        </div>
        <div class="student-acad">
          <table >
            <thead>
              <tr>
                <th class="center-class">Class:</th>
                <th class="center">Units:</th>
                <th class="center">Midterm:</th>
                <th class="center">Final:</th>
                <th class="center">Rating:</th>
                <th class="center-ins">Instructor:</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($subjects as $sub)
                <tr>
                  <td>{{$sub->descript}}</td>
                  <td class="center">3.0</td>
                  <td class="center">{{$sub->pivot->mgrade}}</td>
                  <td class="center">{{$sub->pivot->fgrade}}</td>
                  <td class="center">{{$sub->pivot->rating}}</td>
                  <td>Tocmaya Tamsiloy</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <br>
          <label>Weighted Average: 1.09876542</label>
        </div>
        <br><br><br>
        <div class="prepared">
          <div class="registrar-staf">
            <label>Prepared by:</label><br><br>
            <label>JAIME D. CURAG,JR</label><br>
            <label>Registrar Staff</label><br>
            <label>Date Processed: Saturday - November 14,2015</label>
          </div>
          <div class="registrar">
            <label>Approved by:</label><br><br>
            <label>JOSE RUEL B. ALAMPAYAN</label><br>
            <label class="center">Registrar</label><br>
          </div>
        </div>
        <div class="parents-basic-info">
            <label>Name of Father : {{$student->father}}</label><br>
            <label>Address : {{$student->addb}},{{$student->addt}},{{$student->addp}}.</label>
        </div>
      </div>
  </body> -->
  
  <style media="screen">
    .student-grade-pdf{
      margin:  30px;
      font-size: 14px;
      font-weight: normal;
    }
    .header{
      margin: auto;
      text-align: center;
      align-items: center;
    }
    .header h5{
      margin: 0px;
      font-weight: normal;
      letter-spacing: 1px;
      font-size: 15px;
    }
    .header label{
      margin: 0px;
    }
    .name-address .student-no{
      padding-left: 338px;
    }
    .idnum-course .course-year{
      padding-left: 185px;
    }
    table{
      display: table;
      border: 1px solid black;
    }
    table thead{
      border-bottom: 1px solid black;
      font-size: 14px;
      font-weight: 200!important;
    }
    table thead .center-class{
      padding-left: 130px!important;
      padding-right: 130px!important;
    }
    table thead .center{
      padding-left: 5px!important;
      padding-right: 5px!important;
      text-align: center;
    }
    table thead .center-ins{
      padding-left: 40px!important;
      padding-right: 40px!important;
    }
    table tbody tr .center{
      padding-left: 10px!important;
      padding-right: 10px!important;
      text-align: center;
    }
    table tbody tr td{
      font-size: 11px;
      font-weight: normal;
      padding:3px 0px;
    }
    .student-grade-pdf .prepared{
      display:inline-flex;
    }
    .prepared .registrar{
      margin-left: 475px!important;
    }
  </style>

</html>


<div>

    <h4 class='test-class' style='text-align: center; margin-top: 1px;'>Christian Standhardenger</h4>

    <div class='col-sm-2'>
        <h4 class='akong-papa'>Papa Standhardenger</h4>
        <h4 class='dateOfBirth'>May 28, 1992</h4>
        <h4 class='dateOfBaptism'>November 1, 2050</h4>
    </div>

    <div class='col-sm-2'>
        <h4 class='mama-naku' style='text-align: right;'>Mama Standhardenger</h4>
        <h4 class='address' style='text-align: right;'>Pooc Oriental, Tubigon</h4>
        <h4 class='parish' style='text-align: right;'>St. Isidore Parish, Tubigon</h4>
    </div>
</div>

<div>

    <div class='col-sm-2'>
        <h4 class='joanie-hugo' style='text-align: right; margin-top: 1px;'>Joanie Hugo</h4>
        <h4 class='christian-labtan' style='text-align: right; margin-top: 1px;'>Christian Labtan</h4>
        <h4 class='rose-marilou' style='text-align: right; margin-top: 1px;'>Rose Marilou</h4>
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
<script>
      function printContent(el)
      {
         var restorepage = document.body.innerHTML;
         var printcontent = document.getElementById(el).innerHTML;
         document.body.innerHTML = printcontent;
         window.print();
         document.body.innerHTML = restorepage;
     }
</script>


