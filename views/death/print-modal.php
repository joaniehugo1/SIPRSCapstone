<?php
use yii\helpers\Html;

?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => 'print()']) ?>

<div id="_print">
    <table style="border: none;width: 85%;margin: 0 auto;margin-bottom: 20px">
      <tbody>
        <tr>
          <td style="text-align: center;font-size: 20px;">
            <div>
            <span style="color: #000;">This is to certify that </span>
            <br>
            <br>
            <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $person['attributes']['name'] ?> &nbsp&nbsp</span>
            <br>
            <span>A resident of Barangay  <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Tinangnan &nbsp&nbsp</span>, </span>
            <br>
            <span>Municipality of <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Tubigon &nbsp&nbsp</span>, Province of <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Bohol &nbsp&nbsp</span></span>
            <br>
            <span>{__} Single, son/daughter of <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $person['attributes']['fathers_name'] ?> &nbsp&nbsp</span> and <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $person['attributes']['mothers_name'] ?> &nbsp&nbsp</span></span>
            <br>
            <span>{__} Husband/Wife/widow/er of <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Leonora Chong &nbsp&nbsp</span> </span>
            <br>
            <span>died on the  
                <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('jS', strtotime($model['attributes']['death_date'])) ?> &nbsp&nbsp</span> 
                 of, <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('F', strtotime($model['attributes']['death_date'])) ?> &nbsp&nbsp</span>, 
                 20<span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('y', strtotime($model['attributes']['death_date']))%20 ?> &nbsp&nbsp</span> 
                 at the age of <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('Y',strtotime($model['attributes']['death_date']))-date('Y',strtotime($person['attributes']['birth_date'])) ?> &nbsp&nbsp</span> years</span>
            <br>
            <span>
                {__} and was buried in the Roman Catholic Cemetery of this Parish 
                <br>{__} Municipal Cemetery of <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Tubigon, Bohol &nbsp&nbsp</span> 
                <br> 
                on the 
                <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('jS', strtotime($model['attributes']['buried'])) ?> &nbsp&nbsp</span>
                day of 
                <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('F', strtotime($model['attributes']['buried'])) ?> &nbsp&nbsp</span>, 
                20<span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('y', strtotime($model['attributes']['buried']))%20 ?> &nbsp&nbsp</span>
            </span>
            <br><br>
            <span>The cause of death was <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['cause_of_death'] ?> &nbsp&nbsp</span>
            <br>
            {__} He/She received the last Sacraments of Confessions, Extreme Unction and Holy Vaticum before death.
            <br>
            {__} He/She was not able to receive any sacraments before death.
            </span>
            <br><br>
            <span>
                This is a true copy of the original record as it appears in the Register of Dead of this Parish, Book No. <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['book_no'] ?> &nbsp&nbsp</span> Folio  No. <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['folio_no'] ?> &nbsp&nbsp</span>, Page No.<span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['page_no'] ?> &nbsp&nbsp</span>
            </span> 
            <br><br>
            <span>
               In witness whereof, I affix my signature and put the seal of this Parish of <br>
                <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= $model['attributes']['parish_name'] ?> &nbsp&nbsp</span> <br>
                <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp Tubigon, Bohol &nbsp&nbsp</span> <br>
                on this <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('jS', strtotime($model['attributes']['certificate_date'])) ?> &nbsp&nbsp</span>day of <span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('F', strtotime($model['attributes']['certificate_date'])) ?> &nbsp&nbsp</span>, 20<span style="font-size: 20px;font-weight: bold;text-decoration: underline;">&nbsp&nbsp <?= date('y', strtotime($model['attributes']['certificate_date']))%20 ?> &nbsp&nbsp</span>

            </span>
            </div>
            <br><br>
          </td>
        </tr>
        <tr>
            <td>
            <div style="float: left;font-size: 20px;">
                (Seal)<br>
                <?= date('m-d-y',strtotime($model['attributes']['certificate_date'])) ?>
            </div>
                <div style="float: right;text-align: center;margin-right: 28px;font-size: 20px;">
                    <div style="width: 260px;border-bottom: 1px solid #000;text-align: center;"><?= $priest['attributes']['parish_priest'] ?></div>
                    PARISH PRIEST
                </div>
            </td>
            </tr>
      </tbody>
    </table>
  
</div>
