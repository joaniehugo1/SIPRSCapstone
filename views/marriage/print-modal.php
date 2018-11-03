<?php
use yii\helpers\Html;

?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => '___print()']) ?>

<div id="__print" style="position: relative;text-align: center;width: 816px;height: 1056px;margin: 0 auto;">
    <img src="http://localhost/siprsystem/web/img/marriage.png" style="width: 100%;">
    <table style="border: none;width: 80%;margin: 0 auto;margin-bottom: 20px;position: absolute;top: 90px;right: 0;left: 0;">
      <tbody>
        <tr>
          <td style="text-align: center;">
            <img src="../../img/cert_ma-01.png" style="width: 325px;border-bottom: 2px solid;">
          <br>
          <br>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;font-size: 20px;">
            <div style="color: #e21236;">
            Church of <span style="color: #e21236;"><span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['parish_name'] ?> &nbsp&nbsp</span></span><br>
            Place <span style="color:#000;text-decoration: underline;">&nbsp&nbsp Tubigon &nbsp&nbsp</span> Province <span style="color:#000;text-decoration: underline;">&nbsp&nbsp Bohol &nbsp&nbsp</span>
            <br>
            <br>
            <span>This certifies that </span>
            <br>
            <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $groom['attributes']['name'] ?> &nbsp&nbsp</span> and <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $bride['attributes']['name'] ?> &nbsp&nbsp</span>
            <br>
            </div>
          </td>
        </tr>
        
      </tbody>
    </table>
    <table style="border: none;width: 80%;margin: 0 auto;margin-bottom: 20px;position: absolute;top: 300px;right: 0;left: 0;font-size: 20px;color: #e21236;">
        <tbody>
            <tr>
                <td style="text-align: left;width: 80%;float: right;">
                    Age <span style="color:#000;text-decoration: underline;margin-right: 10px;">&nbsp&nbsp <?= date('Y')-date('Y',strtotime($groom['attributes']['birth_date'])) ?> yrs. old &nbsp&nbsp</span>
                </td>
                <td style="text-align: left;width: 50%;">
                    <span style="color:#000;text-decoration: underline;margin-left: 10px;">&nbsp&nbsp <?= date('Y')-date('Y',strtotime($bride['attributes']['birth_date'])) ?> yrs. old &nbsp&nbsp</span>
                </td>
            </tr>
            <tr>
                <td style="text-align: left;width: 80%;float: right;">
                    Nationality <span style="color:#000;text-decoration: underline;margin-right: 10px;">&nbsp&nbsp <?= $groom['attributes']['nationality'] ?> &nbsp&nbsp</span>
                </td>
                <td style="text-align: left;width: 50%;">
                    <span style="color:#000;text-decoration: underline;margin-left: 10px;">&nbsp&nbsp <?= $bride['attributes']['nationality'] ?> &nbsp&nbsp</span>
                </td>
            </tr> 
            <tr>
                <td style="text-align: left;width: 80%;float: right;">
                    Residence <span style="color:#000;text-decoration: underline;margin-right: 10px;">&nbsp&nbsp <?= $groom['attributes']['birth_place'] ?> &nbsp&nbsp</span>
                </td>
                <td style="text-align: left;width: 50%;">
                    <span style="color:#000;text-decoration: underline;margin-left: 10px;">&nbsp&nbsp <?= $bride['attributes']['birth_place'] ?> &nbsp&nbsp</span>
                </td>
            </tr>
            <tr>
                <td style="text-align: left;width: 80%;float: right;">
                    Father <span style="color:#000;text-decoration: underline;margin-right: 10px;">&nbsp&nbsp <?= $groom['attributes']['fathers_name'] ?> &nbsp&nbsp</span>
                </td>
                <td style="text-align: left;width: 50%;">
                    <span style="color:#000;text-decoration: underline;margin-left: 10px;">&nbsp&nbsp <?= $bride['attributes']['fathers_name'] ?> &nbsp&nbsp</span>
                </td>
            </tr>
            <tr>
                <td style="text-align: left;width: 80%;float: right;">
                    Mother <span style="color:#000;text-decoration: underline;margin-right: 10px;">&nbsp&nbsp <?= $groom['attributes']['mothers_name'] ?> &nbsp&nbsp</span>
                </td>
                <td style="text-align: left;width: 50%;">
                    <span style="color:#000;text-decoration: underline;margin-left: 10px;">&nbsp&nbsp <?= $bride['attributes']['mothers_name'] ?> &nbsp&nbsp</span>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border: none;width: 80%;margin: 0 auto;margin-bottom: 20px;position: absolute;top: 443px;right: 0;left: 0;font-size: 20px;color: #e21236;">
        <tbody>
            <tr>
                <td style="text-align: center;">
                    <br>
                    were united in<br>
                    <img src="../../img/holy.png" style="width: 45%;"><br>
                    according to rites of the Holy Roman Catholic Church<br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border: none;width: 80%;margin: 0 auto;margin-bottom: 20px;position: absolute;top: 604px;right: 0;left: 0;font-size: 20px;color: #e21236;">
        <tbody>
            <tr>
                <td>
                   <div>
                       On the <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= date('jS', strtotime($model['attributes']['married_date'])) ?> &nbsp&nbsp</span> day of <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= date('F', strtotime($model['attributes']['married_date'])) ?> &nbsp&nbsp</span>, 20<span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= date('y', strtotime($model['attributes']['married_date']))%20 ?> &nbsp&nbsp</span><br>
                       The Marriage was solemnized by Rev. <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['solemnize_by'] ?> &nbsp&nbsp</span><br>
                       In the presence of <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['sponsors'] ?> &nbsp&nbsp</span><br>
                       Residence <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['residence'] ?> &nbsp&nbsp</span><br>
                       witnesses as appears from the Marriage Records of this Church <br> Book <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['book_no'] ?> &nbsp&nbsp</span>, Page <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['page_no'] ?> &nbsp&nbsp</span>, Line <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['line_no'] ?> &nbsp&nbsp</span><br>
                       I further certify that the Marriage License No.<span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['marriage_license_no'] ?> &nbsp&nbsp</span> issued at <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['issued_place'] ?>  &nbsp&nbsp</span> <br>on <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= date('F d',strtotime($model['attributes']['issued_date'])) ?>  &nbsp&nbsp</span>, 20<span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= date('y',strtotime($model['attributes']['issued_date']))%20 ?> &nbsp&nbsp</span> in favor of said parties was exhibited <br>Dated <span style="color:#000;text-decoration: underline;">&nbsp&nbsp <?= date('F d Y',strtotime($model['attributes']['exhibited_date'])) ?> &nbsp&nbsp</span><br><br>
                   </div>
                </td>
            </tr>
            <tr>
            <td>
            <div style="float: left">
                (Seal)<br>
                <?= date('m-d-y',strtotime($model['attributes']['exhibited_date'])) ?>
            </div>
                <div style="float: right;text-align: center;margin-right: 28px;font-size: 20px;">
                    <div style="width: 260px;border-bottom: 1px solid #000;text-align: center; color:#000;"><?= $model['attributes']['parish_priest'] ?></div>
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