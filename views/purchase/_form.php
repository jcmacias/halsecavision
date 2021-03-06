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


            <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                'mask' => '999-999-9999',
                'clientOptions' => [
                    'removeMaskOnSubmit' => true,
                ]
            ]) ?>


            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>




        <div class="col-sm-6">

            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'product_code')->hiddenInput()->label(false); ?>
        </div></div>


    <div>
        <div id="productQuantityDiscounts" class="table-responsive " style="margin-top:25px ">
        <table id="p-list" cellspacing="2" cellpadding="2" border="1">
            <tbody>
            <tr>
                <td colspan="5" class="title-tr" align="center">
                    <?= Yii::t('app','Purchase List');?>
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



<div class="form-group pull-right ">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app','Send').' <i class="fa fa-send-o"></i>'  : 'Update', ['id'=>'p-send','class' => $model->isNewRecord ? 'btn btn-success ': 'btn btn-primary ']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
