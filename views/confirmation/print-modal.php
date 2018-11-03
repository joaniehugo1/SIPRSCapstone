<?php
use yii\helpers\Html;

?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => 'print()']) ?>

<div id="_print">
    <table style="border: none;width: 85%;margin: 0 auto;margin-bottom: 20px">
      <tbody>
        <tr>
          <td style="text-align: center;font-size: 25px;">
            <div>
            <span style="color: #0c4b0b;">PARISH OF <br><span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['parish_name'] ?> &nbsp&nbsp</span></span><br>
            <span style="font-size: 16px;font-weight: bold;text-decoration: underline;">Tubigon, Bohol</span>
            </div>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;font-size: 30px;">
            <span style="color: #0c4b0b;">THIS IS TO CERTIFY</span><br><br>
          </td>
        </tr>
        <tr>
          <td colspan="4"><div style="float: left;">That</div><div style="width: 92%;text-align:center;margin: 0 auto;"><div style="border-bottom: 1px solid;width: 100%;font-size: 20px;margin-top: -13px;"><?= $person['attributes']['name'] ?></div></div><br>
          </td>
        </tr>
        <tr>
          <td colspan="4"><div style="float: left;margin-right: 5px;">Child of</div><div style="width: 90%;text-align:center;margin: 0 auto;float: left;"><div style="border-bottom: 1px solid;width: 100%;font-size: 20px;margin-top: -13px;"><?= $person['attributes']['fathers_name'] ?></div></div><br><br>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <div style="float: left;margin-right: 5px;">and</div>
            <div style="width: 80%;text-align:center;margin: 0 auto;float: left;"><div style="border-bottom: 1px solid;width: 100%;font-size: 20px;margin-top: -13px;"><?= $person['attributes']['mothers_name'] ?></div></div>
            <div style="float: left;">was solemnly</div>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <br>
            <div style="float: left;">CONFIRMED on the <span style="text-decoration: underline;">&nbsp&nbsp <?= date('F',strtotime($model['attributes']['given_date'])) ?> &nbsp&nbsp</span>day of <span style="text-decoration: underline;">&nbsp&nbsp <?= date('d',strtotime($model['attributes']['given_date'])) ?> &nbsp&nbsp</span>,20<span style="text-decoration: underline;">&nbsp&nbsp <?= date('y',strtotime($model['attributes']['given_date']))%20 ?> &nbsp&nbsp</span></div><br>
          </td>
        </tr>
      </tbody>
    </table>
    <table style="border: none;width: 85%;margin: 0 auto;">
        <tbody>
            <tr>
                <td style="text-align: center;font-size: 20px;">ACCORDING TO THE RITE OF THE <br>ROMAN CATHOLIC CHURCH</td>
            </tr>
            <tr>
                <td><br>by most Rev. Msgr. <span style="text-decoration: underline;"><?= $model['attributes']['rev_monsignor'] ?></span></td>
            </tr> 
            <tr>
                <td>the Sponsors being <span style="text-decoration: underline;"><?= $model['attributes']['sponsors'] ?></span></td>
            </tr>
            <tr>
                <td>and <span>____</span> as appear from </td>
            </tr>
            <tr>
                <td>the CONFIRMATION Register No. <span style="text-decoration: underline;"><?= $model['attributes']['confirmation_no'] ?></span> of this Church.</br> </td>
            </tr>
            <tr>
                <td>Given at the Parish Ractory this <span style="text-decoration: underline;">&nbsp&nbsp <?= date('F',strtotime($model['attributes']['given_date'])) ?> &nbsp&nbsp</span>day of <span style="text-decoration: underline;">&nbsp&nbsp <?= date('d',strtotime($model['attributes']['given_date'])) ?> &nbsp&nbsp</span>,20<span style="text-decoration: underline;">&nbsp&nbsp <?= date('y',strtotime($model['attributes']['given_date']))%20 ?> &nbsp&nbsp</span> </td>
            </tr>
            <tr>
                <td>
                    <div style="float: right;text-align: center;margin-right: 28px;">
                        <div style="width: 200px;border-bottom: 1px solid #000;text-align: center;"><?= $model['attributes']['parish_priest'] ?></div>
                        PARISH PRIEST
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- <h4 style='text-align: center; margin-top: 1px;'>St.Isidore</h4>
    <h4 style='text-align: center; margin-top: 1px;'>Tubigon,Bohol</h4>

     <h4 style='text-align: center; margin-top: 50px;'>Keziah Faith Boco</h4>
    <h4 style='text-align: center; margin-top: 1px;'>Armando Boco</h4>

     <h4 style='text-align: center; margin-top: 1px;'>Rosana Boco</h4>
    <h4 style='text-align: center; margin-top: 1px;'>12th     March,2017</h4>

     <h4 style='text-align: center; margin-top: 50px;'>Rev.Fr.Tomas Balatayo</h4>
    <h4 style='text-align: center; margin-top: 1px;'>Rose Marilou</h4>

    <div class='col-sm-6'>
        <h4 style='margin-top: 20px; margin-left: 500px;'>12</h4>
        <h4 style='margin-top: 20px; margin-left: 800px;'>22nd</h4>
        <h4 style='margin-top: 20px; margin-left: 200px;'>October   2018</h4>
        <h4 style='margin-top: 20px; margin-left: 200px;'>St. Isidore Parish, Tubigon</h4>
    </div> -->
</div>
