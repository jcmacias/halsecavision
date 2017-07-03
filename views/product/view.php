<?php

use yii\helpers\Html;
use circulon\widgets\ColumnListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

//$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="product-view">

        <h2 class="centerBoxHeading"><?= Html::encode($this->title) ?></h2>

        <div class="centerColumn" id="productGeneral">
            <div class="wrapper bot-border">
                <!--bof Prev/Next bottom position -->
            </div>
            <div class="tie">
                <div class="tie-indent">
                    <div class="page-content">
                        <!--bof Form start-->
                        <form role="form" name="cart_quantity" action="#" method="post" enctype="multipart/form-data">
                            <input name="securityToken" value="551ecd2d54f6c65ba6fc5bd218fbf7c5" type="hidden">

                            <!--eof Form start-->


                            <!--bof Category Icon -->


                            <div class="row">
                                <div class="main-image col-xs-12 col-sm-6">
                                    <div id="fb-root" class=" fb_reset">
                                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                                            <div>
                                                <iframe name="fb_xdm_frame_http" allowtransparency="true"
                                                        allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http"
                                                        aria-hidden="true"
                                                        title="Facebook Cross Domain Communication Frame" tabindex="-1"
                                                        style="border: medium none;"
                                                        src="#"
                                                        frameborder="0"></iframe>
                                                <iframe name="fb_xdm_frame_https" allowtransparency="true"
                                                        allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https"
                                                        aria-hidden="true"
                                                        title="Facebook Cross Domain Communication Frame" tabindex="-1"
                                                        style="border: medium none;"
                                                        src="#"
                                                        frameborder="0"></iframe>
                                            </div>
                                        </div>
                                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                                            <div></div>
                                        </div>
                                    </div>
                                    <!--bof Main Product Image -->


                                    <div id="productMainImage" class="pull-left image-block">
	<span class="image"><a href="/images/01.jpg">
	<img src="images/01.jpg" class="img-responsive" alt="Oatey 316-in x 5-ft Rubber Utility Hose"
         title=" Oatey 316-in x 5-ft Rubber Utility Hose " width="200" height="200">	<span
                class="zoom"></span></a></span>

                                    </div>
                                    <!--eof Main Product Image-->
                                    <div class="video_desc">
                                        <div class="row">

                                            <!--bof Product description -->
                                            <div id="productDescription"
                                                 class="description biggerText col-sm-12 col-xs-12 col-sm-12 "><?= $model->description; ?></div>
                                            <!--eof Product description -->
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-center-column col-xs-12 col-sm-6">
                                    <!--bof free ship icon  -->
                                    <!--eof free ship icon  -->
                                    <h2 class="title_product"><?= $model->name; ?></h2>
                                    <h3 class="sub_title"><?= $model->category_id; ?></h3>
                                    <!--bof Product description -->
                                    <div id="shortDescription" class="description"><?= $model->description; ?>
                                    </div>
                                    <!--eof Product description -->
                                    <!--bof Product details list  -->
                                    <ul class="instock">
                                        <li><strong>Shipping Weight: </strong>2lbs</li>
                                        <li><strong>Manufactured by: </strong>Gerber</li>
                                        <?php if($model->fulldescription) { ?>
                                         <li><strong><a target="_blank" href="/pdf/<?= $model->fulldescription ?>">Full Description </a></strong>PDF</li>
                                        <?php } ?>
                                    </ul>
                                    <!--eof Product details list  -->
                                    <div class="wrapper atrib2">

                                    </div>
                                    <div id="button_product">
                                        <div class="add_to_cart_row"><strong class="fleft text2"><input
                                                    class="form-control" name="cart_quantity" value="1" maxlength="6"
                                                    size="8" type="text"><input name="products_id" value="1"
                                                                                type="hidden"></strong><span
                                                class="buttonRow"><input class="btn btn-success add-to-cart"
                                                                         value="Add to Cart" type="submit"></span></div>
                                    </div>
                                    <!-- bof Social Media Icons -->
                                    <!-- eof Social Media Icons -->
                                </div>
                            </div>
                            <!--bof Quantity Discounts table -->
                            <div id="productQuantityDiscounts">
                                <table cellspacing="2" cellpadding="2" border="1">
                                    <tbody>
                                    <tr>
                                        <td colspan="6" class="title-tr" align="center">
                                            Qty Discounts Off Price
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="center">1-4<br>$550.00</td>

                                        <td align="center">5-9<br>$495.00</td>
                                        <td align="center">10-14<br>$467.50</td>
                                        <td align="center">15-19<br>$440.00</td>
                                        <td align="center">20-24<br>$412.50</td>
                                        <td align="center">25+<br>$385.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" align="center">&nbsp;  </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" align="center">
                                            * Discounts may vary based on options above
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>                <!--eof Quantity Discounts table -->

                            <!--bof also related products module-->

                            <div class="centerBoxWrapper" id="relatedProducts">
                                <h2 class="centerBoxHeading clearfix">Related Products</h2>
                                <div class="row">

                                    <?php Pjax::begin(); ?>    <?= ColumnListView::widget([
                                        'dataProvider' => $related,
                                        'columns' => 6, // default : 1
                                        'itemView' => '_related',
                                        'pager' => [
                                            'firstPageLabel' => 'first',
                                            'lastPageLabel' => 'last',
                                            'prevPageLabel' => 'previous',
                                            'nextPageLabel' => 'next',
                                            'maxButtonCount' => 3,
                                        ],
                                        'layout' => "{items}\n{pager}",

                                    ])

                           ?>
                                    <?php Pjax::end(); ?>
                                </div>
                            </div>


                            <!--eof also related products module-->
                            <br>
                            <div class="text2">
                                <p class="reviewCount"><strong>Current Reviews: 0</strong></p>

                                <!--bof Product date added/available-->
                                <p id="productDateAdded" class="productGeneral centeredContent">This product was added
                                    to our catalog on Thursday 09 September, 2010.</p>
                                <!--eof Product date added/available -->

                                <!--bof Product URL -->
                                <!--eof Product URL -->

                            </div>


                            <!--bof also purchased products module-->

                            <!--eof also purchased products module-->

                            <!--bof Form close-->
                        </form>
                        <!--bof Form close-->

                    </div>
                </div>
            </div>
        </div>

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id, 'category_id' => $model->category_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id, 'category_id' => $model->category_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

    </div>
</div>

