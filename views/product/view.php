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
                                       <span class="image"><a href="/uploads/<?= $model->image; ?>">
                                       <img src="/uploads/<?= $model->image; ?>" class="img-responsive" alt="halseca vision"
                                            title="halseca vision" width="200" height="200">   <span
                                                   class="zoom"></span></a></span>

                                    </div>
                                    <!--eof Main Product Image-->
                                    <div class="video_desc">
                                        <div class="row">

                                            <!--bof Product description -->
                                            <div id="productDescription"
                                                 class="description biggerText col-sm-12 col-xs-12 col-sm-12 "><?= $model->description; ?>
                                            </div>
                                            <!--eof Product description -->
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-center-column col-xs-12 col-sm-6 simpleCart_shelfItem">

                                    <h2 class="title_product item_name"><?= $model->code; ?></h2>
                                    <h3 class="sub_title"><?= $model->category->name; ?></h3>

                                    <div id="shortDescription" class="description"><?= $model->description; ?>
                                    </div>

                                    <ul class="instock">
                                        <?php if ($model->fulldescription) { ?>
                                            <li><strong><a target="_blank"
                                                           href="/pdf/<?= $model->fulldescription ?>"><?= Yii::t('app', 'Full Description '); ?></a></strong>PDF
                                            </li>
                                        <?php } ?>
                                    </ul>


                                    <?php if (Yii::$app->language == 'en') { ?>
                                        <div id="button_product">
                                            <div class="add_to_cart_row ">
                                                <strong class="fleft text2"><input
                                                        class="form-control item_Quantity" name="cart_quantity"
                                                        value="1" maxlength="6"
                                                        size="8" type="text"><input name="products_id" value="1"
                                                                                    type="hidden"></strong><span
                                                    class="buttonRow"><input
                                                        class="  btn btn-success add-to-cart add-to-list item_add"
                                                        value="Add to List" type="button"></span></div>
                                        </div>
                                    <?php } ?>
                                    <?php if (Yii::$app->language == 'es') { ?>
                                        <div id="button_product">
                                            <div class="add_to_cart_row">
                                                <strong class="fleft text2"><input
                                                        class="form-control item_Quantity" name="cart_quantity"
                                                        value="1" maxlength="6"
                                                        size="8" type="text"><input name="products_id" value="1"
                                                                                    type="hidden"></strong><span
                                                    class="buttonRow "><input
                                                        class=" btn btn-success add-to-cart item_add add-to-list"
                                                        value="Añadir a la Lista" type="button"></span></div>
                                        </div>
                                    <?php } ?>

                                    <!-- bof Social Media Icons -->
                                    <!-- eof Social Media Icons -->
                                </div>
                            </div>
                            <!--bof Quantity Discounts table -->


                            <!--bof also related products module-->

                            <div class="centerBoxWrapper" id="relatedProducts">
                                <h2 class="centerBoxHeading clearfix"><?= Yii::t('app', 'Related Products'); ?></h2>
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
                                        'layout' => "\n{items}\n{pager}",

                                    ])

                                    ?>
                                    <?php Pjax::end(); ?>
                                </div>
                            </div>


                            <!--eof also related products module-->
                            <br>

                        </form>
                        <!--bof Form close-->

                    </div>
                </div>
            </div>
        </div>
        <?php if (!Yii::$app->user->isGuest) { ?>

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
        <?php } ?>
    </div>
</div>

