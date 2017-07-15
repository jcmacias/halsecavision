



<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = Yii::t('app','My List');
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="purchase-index">
        <h2 class="centerBoxHeading h2BoxHeadingab"><?= Html::encode($this->title) ?></h2>


<div>
    <div id="productQuantityDiscounts" class="table-responsive" style="margin-top:25px ">
        <table id="p-list" cellspacing="2" cellpadding="2" border="1">
            <tbody>
            <tr>
                <td colspan="5" class="title-tr" align="center">
                    <?= Yii::t('app','My List');?>
                </td>
            </tr>

            <tr>
                <td align="center">
                    <div class="prod-img-label"><?= Yii::t('app','Image');?></div>
                </td>
                <td align="center">
                    <div class="prod-name-label"><?= Yii::t('app','Product Name');?></div>
                </td>
                <td align="center">
                    <div class="prod-code-label"><?= Yii::t('app','Code');?></div>
                </td>
                <td align="center">
                    <div class="prod-qty-label">Qty</div>
                </td>
                <td align="center">
                    <div class="prod-desc-label"><?= Yii::t('app','Description');?></div>
                </td>

            </tr>
            <tr>
                <td colspan="5" align="center">&nbsp;  </td>
            </tr>
            </tbody>
        </table>


    </div>
</div>
    </div>
</div>