<?php
use yii\helpers\Url;

?>
<div class="product-col" data-match-height="featured" style="height: 183px;">
    <h5><a class="product-name name"
           href="<?= Url::to(['product/view', 'id' => $model->id,'category_id' => $model->category_id]);?>"><?= $model->name; ?></a></h5>
    <div class="img">
        <a href="<?= Url::to(['product/view', 'id' => $model->id,'category_id' => $model->category_id]);?>"><img
                src="/images/10.jpg" class="img-responsive"
                alt="Vigo One Handle Single Hole Pull Out Spray Kitchen Faucet"
                title=" Vigo One Handle Single Hole Pull Out Spray Kitchen Faucet " width="200" height="200"></a>

    </div>
    <div class="clearfix"></div>
    <div class="prod-info">
        <div class="product-buttons">
            <div class="button"><a class="btn add-to-cart"
                                   href="#"><span
                        class="cssButton normal_button button  button_add_to_cart"
                        onmouseover="this.className='cssButtonHover normal_button button  button_add_to_cart button_add_to_cartHover'"
                        onmouseout="this.className='cssButton normal_button button  button_add_to_cart'">&nbsp;Add to Cart&nbsp;</span></a>
            </div>
            <div class="button1"><a class="btn products-button"
                                    href="<?= Url::to(['product/view', 'id' => $model->id,'category_id' => $model->category_id]);?>"><span
                        class="cssButton normal_button button  button_goto_prod_details"
                        onmouseover="this.className='cssButtonHover normal_button button  button_goto_prod_details button_goto_prod_detailsHover'"
                        onmouseout="this.className='cssButton normal_button button  button_goto_prod_details'">&nbsp;Details&nbsp;</span></a>
            </div>
        </div>
    </div>
</div>