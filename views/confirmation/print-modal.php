<?php
use yii\helpers\Html;

?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => '___print()']) ?>
<style type="text/css">
  ._table{
    margin-top: 35px !important;
  }
</style>
<div id="__print" style="position: relative;text-align: center;height: 816px;width: 542.4px;margin: 0 auto;">
    <img src="../../img/confirmation.png" style="width: 100%;">
    <table style="border: none;width: 80%;margin: 0 auto;position: absolute;top: 75px;right: 0;left: 0;">
      <tbody>
        <tr>
          <td style="text-align: center;">
            <img src="../../img/confirm.png" style="width: 325px;border-bottom: 2px solid #e21236;">
          <br>
          <br>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;font-size: 25px;">
            <div>
            <span style="font-size: 16px;font-weight: bold;">PARISH OF <br><span style="color:#000;text-decoration: underline;text-decoration-color: #e21236;    font-size: 20px;">&nbsp&nbsp <?= $model['attributes']['parish_name'] ?> &nbsp&nbsp</span></span><br>
            <span style="font-size: 20px;font-weight: bold;text-decoration: underline;color: #000;text-decoration-color: #e21236;">&nbsp&nbsp&nbsp&nbsp Tubigon, Bohol &nbsp&nbsp&nbsp&nbsp</span>
            </div>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;font-size: 30px;">
            <span style="font-size: 16px;font-weight: bold;margin-top: 10px;">THIS IS TO CERTIFY</span><br><br>
          </td>
        </tr>
        <tr>
          <td colspan="4"><div style="float: left;margin-right: 5px;font-weight: 600;   color: #e21236;">That</div><div style="width: 83%;text-align: center;margin: 0 auto;float: left;"><div style="border-bottom: 1px solid #e21236;;width: 100%;font-size: 20px;margin-top: -13px;color: #000;"><?= $person['attributes']['name'] ?></div></div><br><br>
          </td>
        </tr>
        <tr>
          <td colspan="4"><div style="float: left;margin-right: 5px;font-weight: 600;   color: #e21236;">Child of</div><div style="width: 80%;text-align:center;margin: 0 auto;float: left;"><div style="border-bottom: 1px solid #e21236;width: 100%;font-size: 20px;margin-top: -13px;color: #000;"><?= $person['attributes']['fathers_name'] ?></div></div><br><br>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <div style="float: left;margin-right: 5px;font-weight: 600;   color: #e21236;">and</div>
            <div style="width: 56%;text-align:center;margin: 0 auto;float: left;"><div style="border-bottom: 1px solid #e21236;width: 100%;font-size: 20px;margin-top: -13px;color: #000;"><?= $person['attributes']['mothers_name'] ?></div></div>
            <div style="float: left;font-weight: 600;margin-left: 5px;   color: #e21236;">was solemnly</div>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <br>
            <div style="float: left;    font-weight: 600;   color: #e21236;">CONFIRMED on the <span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;">&nbsp&nbsp <?= date('F',strtotime($model['attributes']['given_date'])) ?> &nbsp&nbsp</span>day of <span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;">&nbsp&nbsp <?= date('d',strtotime($model['attributes']['given_date'])) ?> &nbsp&nbsp</span>,20<span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;">&nbsp&nbsp <?= date('y',strtotime($model['attributes']['given_date']))%20 ?> &nbsp&nbsp</span></div>
          </td>
        </tr>
      </tbody>
    </table>
    <table class="_table" style="border: none;width: 80%;margin: 0 auto;position: absolute;top: 450px;right: 0;left: 0;    text-align: justify;">
        <tbody>
            <tr>
                <td style="text-align: center;font-size: 20px;   color: #e21236;">ACCORDING TO THE RITE OF THE <br>ROMAN CATHOLIC CHURCH</td>
            </tr>
            <tr>
                <td style="font-weight: 600;   color: #e21236;"><br>by most Rev. Msgr. <span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;font-size: 20px;font-weight: normal;"><?= $model['attributes']['rev_monsignor'] ?></span></td>
            </tr> 
            <tr>
                <td style="font-weight: 600;   color: #e21236;">the Sponsors being <span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;font-size: 20px;font-weight: normal;"><?= $model['attributes']['sponsors'] ?></span></td>
            </tr>
            <tr>
                <td style="font-weight: 600;   color: #e21236;">and as appear from the CONFIRMATION Register No. <span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;font-size: 20px;font-weight: normal;"><?= $model['attributes']['confirmation_no'] ?></span> of this Church.</br> </td>
            </tr>
            <tr>
                <td style="font-weight: 600;   color: #e21236;">Given at the Parish Ractory this <span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;font-size: 20px;">&nbsp&nbsp <?= date('F',strtotime($model['attributes']['given_date'])) ?> &nbsp&nbsp</span>day of <span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;font-size: 20px;;"> <?= date('d',strtotime($model['attributes']['given_date'])) ?> </span>, 20<span style="text-decoration: underline;color: #000;text-decoration-color: #e21236;font-size: 20px;">&nbsp&nbsp <?= date('y',strtotime($model['attributes']['given_date']))%20 ?> &nbsp&nbsp</span> </td>
            </tr>
            <tr>
                <td>
                    <div style="float: right;text-align: center;margin-right: 28px;">
                        <div style="width: 250px;border-bottom: 1px solid #e21236;text-align: center;color: #000;font-size: 20px;"><?= $model['attributes']['parish_priest'] ?></div>
                        PARISH PRIEST
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
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