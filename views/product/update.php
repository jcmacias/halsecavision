<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = 'Update Product: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'category_id' => $model->category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

    <div class="container">
        <div class="product-update">

            <h2 class="centerBoxHeading"><?= Html::encode($this->title) ?></h2>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
