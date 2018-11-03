<?php
use yii\helpers\Html;

?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => '___print()']) ?>

<div id="__print" style="position: relative;text-align: center;height: 816px;width: 542.4px;margin: 0 auto;">
    <img src="../../img/Death.png" style="width: 100%;">
    <table style="border: none;width: 80%;margin: 0 auto;margin-bottom: 20px;position: absolute;top: 50px;right: 0;left: 0;">
      <tbody>
        <tr>
          <td style="text-align: center;">
            <img src="../../img/dea-01.png" style="width: 325px;border-bottom: 2px solid;">
          <br>
          <br>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;font-size: 16px;">
            <div>
            <span style="color: #000;">This is to certify that </span>
            <br>
            <br>
            <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $person['attributes']['name'] ?> &nbsp&nbsp</span><br>
            <span>A resident of Barangay  <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Tinangnan &nbsp&nbsp</span>, </span>
            <span>Municipality of <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Tubigon &nbsp&nbsp</span>, Province of <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Bohol &nbsp&nbsp</span></span>
            <span>{__} Single, son/daughter of <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $person['attributes']['fathers_name'] ?> &nbsp&nbsp</span> and <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $person['attributes']['mothers_name'] ?> &nbsp&nbsp</span></span>
            <span>{__} Husband/Wife/widow/er of <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Leonora Chong &nbsp&nbsp</span> </span>
            <span>died on the  <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('jS', strtotime($model['attributes']['death_date'])) ?> &nbsp&nbsp</span> day of, <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('F', strtotime($model['attributes']['death_date'])) ?> &nbsp&nbsp</span>, 20<span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('y', strtotime($model['attributes']['death_date']))%20 ?> &nbsp&nbsp</span> at the age of <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('Y',strtotime($model['attributes']['death_date']))-date('Y',strtotime($person['attributes']['birth_date'])) ?> &nbsp&nbsp</span> years</span>
            <span>
                {__} and was buried in the Roman Catholic Cemetery of this Parish {__} Municipal Cemetery of <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Tubigon, Bohol &nbsp&nbsp</span> 
                <br> 
                on the 
                <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('jS', strtotime($model['attributes']['buried'])) ?> &nbsp&nbsp</span>
                day of 
                <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('F', strtotime($model['attributes']['buried'])) ?> &nbsp&nbsp</span>, 
                20<span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('y', strtotime($model['attributes']['buried']))%20 ?> &nbsp&nbsp</span>
            </span>
            <br><br>
            <span>The cause of death was <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['cause_of_death'] ?> &nbsp&nbsp</span>
            <br>
            {__} He/She received the last Sacraments of Confessions, Extreme Unction and Holy Vaticum before death.
            <br>
            {__} He/She was not able to receive any sacraments before death.
            </span>
            <br><br>
            <span>
                This is a true copy of the original record as it appears in the Register of Dead of this Parish, Book No. <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['book_no'] ?> &nbsp&nbsp</span> Folio  No. <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['folio_no'] ?> &nbsp&nbsp</span>, Page No.<span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['page_no'] ?> &nbsp&nbsp</span>
            </span> 
            <br><br>
            <span>
               In witness whereof, I affix my signature and put the seal of this Parish of <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['parish_name'] ?> &nbsp&nbsp</span> <br>
                <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Tubigon, Bohol &nbsp&nbsp</span> <br>
                on this <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('jS', strtotime($model['attributes']['certificate_date'])) ?> &nbsp&nbsp</span>day of <span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('F', strtotime($model['attributes']['certificate_date'])) ?> &nbsp&nbsp</span>, 20<span style="font-size: 17px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('y', strtotime($model['attributes']['certificate_date']))%20 ?> &nbsp&nbsp</span>

            </span>
            </div>
            <br>
          </td>
        </tr>
        <tr>
            <td>
            <div style="float: left;font-size: 16px;">
                (Seal)<br>
                <?= date('m-d-y',strtotime($model['attributes']['certificate_date'])) ?>
            </div>
                <div style="float: right;text-align: center;font-size: 16px;">
                    <div style="width: 260px;border-bottom: 1px solid #000;text-align: center;"><?= $priest['attributes']['parish_priest'] ?></div>
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