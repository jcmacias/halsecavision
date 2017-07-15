<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Purchase */

$this->title = Yii::t('app','Create Purchase');
?>
<div class="container">
<div class="purchase-create">

    <h2 class="centerBoxHeading h2BoxHeadingab"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>