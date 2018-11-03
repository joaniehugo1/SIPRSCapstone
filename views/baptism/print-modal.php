<?php
namespace app\assets;
use yii\helpers\Html;
use yii\app\Assets\PrintAsset;
use yii\widgets\DetailView;


?>
<?php $this->head() ?>
<?= Html::a('Print', ['print-modal', 'id' => $model->id], ['class' => 'btn btn-primary', 'onClick' => 'print()']) ?>
   </script>
  

</html>
<table style="border: none;width: 100%;">
  <tbody>
    <tr>
      <td style="text-align: center;font-size: 25px;">
        <div>
        <span style="color: #0c4b0b;">PARISH OF <span style="color:#000;text-decoration: underline;">&nbsp&nbsp ST. ISIDORE THE FARMER&nbsp&nbsp</span></span><br>
        <span style="font-size: 20px;font-weight: bold;">Tubigon, Bohol</span>
        </div>
      </td>
    </tr>
    <tr>
      <td style="text-align: center;font-size: 30px;    font-style: italic;">
        <span style="color: #0c4b0b;">Certificate of Baptism</span>
      </td>
    </tr>
    <tr>
      <td style="text-align: center;font-size: 30px;">
        <span style="font-size: 22px;    font-style: italic;color: #0c4b0b;">of</span>
      </td>
    </tr>
    <tr>
      <td colspan="4"><div style="width: 94%;text-align:center;border-bottom:1px solid #000;margin: 0 auto;"><h4 class='test-class' style='text-align: center; margin-top: 1px;'><?= $persons['attributes']['name']; ?></h4></div></td>
    </tr>
  </tbody>
</table>
<table style="border: none;width: 100%;margin-top: 20px;">
  <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= $persons['attributes']['fathers_name']; ?>
      </div>
      <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Father</span><br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= $persons['attributes']['mothers_name']; ?>
      </div>
      <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Mother</span><br>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= $persons['attributes']['birth_date']; ?>
      </div>
      <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Date of Birth</span><br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= $persons['attributes']['birth_place']; ?>
      </div>
      <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Place of Birth</span><br>
    </td>
  </tr> 
   <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= $model['attributes']['baptism_date'] ?>
      </div>
      <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Date of Baptism</span><br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= $model['attributes']['baptism_place'] ?>
      </div>
      <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Place of Baptism</span><br>
    </td>
  </tr>
</table>
<table style="border: none;width: 100%;margin-top: 10px;">
  <tbody>
    <tr>
      <td style="text-align:center;font-size:22px;font-style:italic;color: #0c4b0b;font-weight:bold">GodParents</td>
    </tr>
  </tbody>
</table>
<table style="border: none;width: 100%;margin-top: 10px;">
  <?php $arr = explode(',', $model['attributes']['god_parents']) ?>
  <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= array_key_exists(0, $arr)?$arr[0]:''; ?>
      </div>
      <br>
      <br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= array_key_exists(1, $arr)?$arr[1]:''; ?>
      </div>
      <br>
      <br>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= array_key_exists(2, $arr)?$arr[2]:''; ?>
      </div>
      <br>
      <br>
    </td>
    <td colspan="2" style="text-align:center;width: 50%;">
      <div style="border-bottom:1px solid #000;margin: 0 32px;font-size: 20px;">
        <?= array_key_exists(3, $arr)?$arr[3]:''; ?>
      </div>
      <br>
      <br>
    </td>
  </tr>
</table>
<table style="border: none;width: 100%;margin-top: 10px;">
  <tbody>
    <tr>
      <td colspan="2" style="text-align:center;">
        <div style="border-bottom:1px solid #000;margin: 0 auto;width: 30%;font-size: 20px;">
        <?= $priest['attributes']['parish_priest'] ?>
        </div>
        <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Officiating Priest</span>
      </td>
    </tr>
  </tbody>
</table>
<table style="border: none;width: 100%;margin-top: 10px;">
  <tbody>
    <tr>
      <td colspan="2" style="text-align:center;">
        <div style="border-bottom:1px solid #000;margin: 0 auto;width: 30%;font-size: 20px;">
        <?= $priest['attributes']['parish_priest'] ?>
        </div>
        <span style="font-style: italic;font-size: 14px;font-weight: bold;color: #0c4b0b;">Parish Priest</span>
      </td>
    </tr>
  </tbody>
</table>
<div style="margin-left: 33px;">
  <span style="color: #0c4b0b;">Book No. <span style="border-bottom: 1px solid #0c4b0b"><?= $model['attributes']['book_no'] ?></span></span><br>
  <span style="color: #0c4b0b;">Page No. <span style="border-bottom: 1px solid #0c4b0b"><?= $model['attributes']['page_no'] ?></span></span><br>
  <span style="color: #0c4b0b;">Serial No. <span style="border-bottom: 1px solid #0c4b0b"><?= $model['attributes']['serial_no'] ?></span></span><br>
</div>
