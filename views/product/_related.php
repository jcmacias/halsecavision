<?php
use yii\helpers\Url;
?>
<!--<div class="col-xs-12 col-sm-4 col-md-2">-->
    <div data-match-height="items-e" class="product-col " style="height: 287px;">
        <div class="img"><a
                href="<?= Url::to(['product/view', 'id' => $model->id,'category_id' => $model->category_id]);?>"><img
                    src="/uploads/<?= $model->image;  ?>" class="img-responsive" alt=""
                    title="" width="114" height="114"></a></div>
        <div class="prod-info"><a class="product-name name "
                                  href="<?= Url::to(['product/view', 'id' => $model->id,'category_id' => $model->category_id]);?>"><?= $model->code;  ?></a></div>
    </div>
<!--</div>-->