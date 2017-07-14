



<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Purchases List';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="purchase-index">
        <h2 class="centerBoxHeading h2BoxHeadingab"><?= Html::encode($this->title) ?></h2>


<div>
    <div id="productQuantityDiscounts" class="table-responsive" style="margin-top:25px ">
        <table id="1p-list" cellspacing="2" cellpadding="2" border="1">
            <tbody>
            <tr>
                <td colspan="5" class="title-tr" align="center">
                    Purchase List
                </td>
            </tr>

            <tr>
                <td align="center">
                    <div class="prod-img-label">Image</div>
                </td>
                <td align="center">
                    <div class="prod-name-label">Product Name</div>
                </td>
                <td align="center">
                    <div class="prod-code-label">Code</div>
                </td>
                <td align="center">
                    <div class="prod-qty-label">Qty</div>
                </td>
                <td align="center">
                    <div class="prod-desc-label">Description</div>
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