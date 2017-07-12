<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


 <div class="row">
     <div class="col-sm-2 pull-right" style="padding-top: 17px;padding-left: 0px;">
         <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
         <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
     </div>
         <div class="col-sm-4 pull-right"  style="display: inline">
     <?= $form->field($model, 'code')->label("Search by code") ?></div>

 </div>
    <?php ActiveForm::end(); ?>

</div>
