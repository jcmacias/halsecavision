<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Purchase */

//$this->title = $model->id;

?>
<div class="container">
<div class="purchase-view">

    <h2 class="centerBoxHeading h2BoxHeadingab">Thank you</h2>

        <div class="border-grey col-sm-10" style="text-align: center; padding-bottom: 50px; margin-bottom: 50px">
            <div class="alert alert-success">
                <p style="color: #00aa00"><strong>You form has been sent!</strong></p>
            </div>

<br>

            <div>
                <p><strong> <?= Yii::t('app','Thank you for contacting us. We will respond to you as soon as possible.');?></strong></p>
            </div>
            <div>
                <p><strong><?= Yii::t('app','Thank you for chose Halseca Vision.');?></strong></p>
            </div>

</div>
        </div>
    </div>
</div>