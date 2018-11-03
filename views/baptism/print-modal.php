<?php
namespace app\assets;
use yii\helpers\Html;
use yii\app\Assets\PrintAsset;
use yii\widgets\DetailView;


?>
<?php $this->head() ?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => '___print()']) ?>
   </script>
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
<script type="text/javascript">
    $(document).ready(function(){
        var div = document.getElementById('__print');
        newWin = window.open("");
        newWin.document.write(div.outerHTML);

        newWin.print();

        newWin.onfocus=function(){ 
          newWin.close();
        }
    });
</script>
<div id="__print" style="width: 70%;margin: 0 auto;">
<table style="border: none;width: 100%;margin:0 auto;    margin-top: 280px;">
  <tbody>
    <tr>
      <td colspan="4"><div style="width: 94%;text-align:center;margin: 0 auto;"><h4 class='test-class' style='text-align: center; margin-top: 1px;font-size: 20px;'><?= $persons['attributes']['name']; ?></h4></div></td>
    </tr>
  </tbody>
</table>
<table style="border: none;width: 100%;margin: 0 auto; ">
  <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= $persons['attributes']['fathers_name']; ?>
      </div>
      <!-- <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Father</span> -->
      <br>
      <br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= $persons['attributes']['mothers_name']; ?>
      </div>
      <!-- <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Mother</span> -->
      <br>
      <br>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= $persons['attributes']['birth_date']; ?>
      </div>
      <!-- <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Date of Birth</span> -->
      <br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= $persons['attributes']['birth_place']; ?>
      </div>
      <!-- <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Place of Birth</span> -->
      <br>
    </td>
  </tr> 
   <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= $model['attributes']['baptism_date'] ?>
      </div>
      <!-- <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Date of Baptism</span> -->
      <br>
      <br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= $model['attributes']['baptism_place'] ?>
      </div>
      <!-- <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Place of Baptism</span> -->
      <br>
      <br>
    </td>
  </tr>
</table>
<table style="border: none;width: 100%;margin: 10px auto;">
  <tbody>
    <tr>
      <!-- <td style="text-align:center;font-size:22px;font-style:italic;color: #0c4b0b;font-weight:bold">Godparents</td> -->
    </tr>
  </tbody>
</table>
<table style="border: none;width: 100%;margin: 10px auto;">
  <?php $arr = explode(',', $model['attributes']['god_parents']) ?>
  <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= array_key_exists(0, $arr)?$arr[0]:''; ?>
      </div>
      <br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= array_key_exists(1, $arr)?$arr[1]:''; ?>
      </div>
       <br>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= array_key_exists(2, $arr)?$arr[2]:''; ?>
      </div>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="margin: 0 32px;font-size: 18px;">
        <?= array_key_exists(3, $arr)?$arr[3]:''; ?>
      </div>
    </td>
  </tr>
</table>
<table style="border: none;width: 100%;margin: 0px auto 20px;">
  <tbody>
    <tr>
      <td colspan="2" style="text-align:center;">
        <div style="margin: 0 auto;width: 50%;font-size: 18px;">
          <?= $priest['attributes']['parish_priest'] ?>
        </div>
        <!-- <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Officiating Priest</span> -->
      </td>
    </tr>
  </tbody>
</table>
<div style="margin-left: 33px;width: 100%;margin: 10px auto">
  <br>
  <br>
  <br>
  <br>
  <span style="color: #0c4b0b;"><span style="margin-left: 90px;font-size: 13px;"><?= $model['attributes']['book_no'] ?></span></span><br>
  <span style="color: #0c4b0b;"><span style="margin-left: 90px;font-size: 13px;"><?= $model['attributes']['page_no'] ?></span></span><br>
  <span style="color: #0c4b0b;"><span style="margin-left: 90px;font-size: 13px;"><?= $model['attributes']['serial_no'] ?></span></span><br>
</div>
</div>
<script type="text/javascript">
  function ___print(){
     var div = document.getElementById('__print');
        newWin = window.open("");
        newWin.document.write(div.outerHTML);

        newWin.print();

        newWin.onfocus=function(){ 
          newWin.close();
        }
  }
</script>