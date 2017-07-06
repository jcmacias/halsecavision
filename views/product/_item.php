<?php
/**
 * Created by PhpStorm.
 * User: Julio Cesar
 * Date: 6/28/2017
 * Time: 7:20 PM
 */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;

?>
<div class="product-col simpleCart_shelfItem">
    <div class="img">
        <a href="<?= Url::to(['product/view', 'id' => $model->id,'category_id' => $model->category_id]);?>"><img
                src="/images/01.jpg" class="img-responsive" alt="Oatey 316-in x 5-ft Rubber Utility Hose"
                title=" Oatey 316-in x 5-ft Rubber Utility Hose " width="200" height="200"></a></div>
    <div class="prod-info"><h5 itemprop="name">
            <?= Html::a(Html::encode($model->code), ['view', 'id' => $model->id, 'category_id' => $model->category_id],['class' => 'product-name name item_name']);?>
        </h5>
        <div itemprop="description" class="text">
            <span class="list-desc" style="display: none;"><?= Html::encode($model->description) ?></span>
            <span class="grid-desc" style="display: block;"><?= Html::encode($model->description) ?></span>
        </div>
        <div class="product-buttons">
            <div class="content_price">

                <div class="clearfix"></div>
                <input type="hidden" value="1" class="item_Quantity">
                <div class="button"><a class="btn add-to-cart item_add"
                                       href="javascript:;"><span
                            class="cssButton normal_button button  button_add_to_cart"
                            onmouseover="this.className='cssButtonHover normal_button button  button_add_to_cart button_add_to_cartHover'"
                            onmouseout="this.className='cssButton normal_button button  button_add_to_cart'">&nbsp;Add to List&nbsp;</span></a>
                </div>
                <div class="button1"><a class="btn"
                                        href="<?= Url::to(['product/view', 'id' => $model->id,'category_id' => $model->category_id]);?>"><span
                            class="cssButton normal_button button  button_goto_prod_details"
                            onmouseover="this.className='cssButtonHover normal_button button  button_goto_prod_details button_goto_prod_detailsHover'"
                            onmouseout="this.className='cssButton normal_button button  button_goto_prod_details'">&nbsp;Details&nbsp;</span></a>
                </div>
                <br></div>

        </div>
    </div>
</div>