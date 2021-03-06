<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
//use kartik\form\ActiveForm;
//use kartik\widgets\FileInput;
use kartik\checkbox\CheckboxX;
/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">



    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'code')->textInput(['class'=>'form-control','maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty_store')->textInput() ?>

    <?= $form->field($model, 'featured')->widget(CheckboxX::classname(), []);
    ?>

    <?= $form->field($model, 'price')->textInput() ?>
    <?php

    $categoryTemp = \app\models\Category::find()->orderBy('name')->asArray()->all();

    $categoryList = ArrayHelper::map($categoryTemp, 'id', 'name');


    ?>


    <?= $form->field($model, 'category_id')->dropDownList($categoryList)?>

    <?= $form->field($model, 'upload_file')->fileInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'upload_pdf')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
