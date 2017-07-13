<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Purchase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">


        <div class="col-sm-6">

            <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'phone')->textInput() ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>




        <div class="col-sm-6">

            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'product_code')->hiddenInput()->label(false); ?>
        </div></div>


    <div>
        <div id="productQuantityDiscounts" class="table-responsive" style="margin-top:25px ">
        <table id="p-list" cellspacing="2" cellpadding="2" border="1">
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



<div class="form-group pull-right">
    <?= Html::submitButton($model->isNewRecord ? 'Send <i class="fa fa-send-o"></i> ' : 'Update', ['id'=>'p-send','class' => $model->isNewRecord ? 'btn btn-success simpleCart_empty': 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
