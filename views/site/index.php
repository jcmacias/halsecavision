<?php

/* @var $this yii\web\View */

use circulon\widgets\ColumnListView;
use yii\widgets\Pjax;

$this->title = 'My Yii Application';
?>
<div class="slider">
    <!-- begin edit for ZX Slideshow -->
    <script>
        jQuery(window).load(function() {
            jQuery('#slider').nivoSlider({
                effect: 'fold',
                animSpeed: 500,
                pauseTime: 4000,
                directionNav: true,
                directionNavHide: true,
                controlNav: false,
                pauseOnHover: true,
                captionOpacity: 0.8			});
        });

    </script>

    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="/images/slide1.jpg" class="img-responsive" alt="" width="2050" height="568" /></a>
            <a href="#"><img src="/images/slide2.jpg" class="img-responsive" alt="" width="2050" height="568" /></a>
            <a href="#"><img src="/images/slide3.jpg" class="img-responsive" alt="" width="2050" height="568" /></a>
        </div>
    </div>                    <!-- end edit for ZX Slideshow -->
</div>
<section class="ie9_all">
    <div class="container">
        <div class="banners1">
            <div class="row">
                <div class="col-sm-4 col-xs-4 item item_1"><a href=""><img src="images/item1.png" class="img-responsive"  alt="Camera AHD/CVI/TVI/SDI." title=" Camera " width="370" height="217" /><div class="title"><div class="capt bounce-to-bottom"><h3><b>Camera</b> HD/IP/WIFI </h3><p>Your eyes when you are not there, choose modern technology with us. </p></div></div></a>
                </div><div class="col-sm-4 col-xs-4 item item_2"><a href=""><img src="images/item2.png" class="img-responsive" alt="WIFI/IP/PLC Quick to install / Maximum quality.." title="Security camera kits" width="370" height="217" /><div class="title"><div class="capt bounce-to-bottom"><h3><b>Kits </b>WIFI/IP/PLC</h3><p>Quick to install / Maximum quality / Competitive prices.</p></div></div></a>
                </div><div class="col-sm-4 col-xs-4 item item_3"><a href=""><img src="images/item3.png" class="img-responsive" alt="PTZ Camera, Make possible to monitor large areas with a single security camera." title="Categotia1" width="370" height="217" /><div class="title"><div class="capt bounce-to-bottom"><h3><b>PTZ</b> Camera</h3><p>Make possible to monitor large areas with a single security camera.</p></div></div></a>
                </div>          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            </div>
            <div class="main-col

	   left_column      col-sm-12 ">

                <div class="row">

                    <div class="center_column col-xs-12
				col-sm-12 with_col ">
                        <div class="centerColumn" id="indexDefault">


                            <!-- deprecated - to use uncomment this section
                            <div id="" class="content">This is the main define statement for the page for english when no template defined file exists. It is located in: <strong>/includes/languages/english/index.php</strong></div>
                            -->

                            <!-- deprecated - to use uncomment this section
                            <div id="" class="content">Define your main Index page copy here.</div>
                            -->

                            <div id="indexDefaultMainContent"></div>



                            <!-- bof: featured products  -->
                            <div class="centerBoxWrapper clearfix" id="featuredProducts">

                                <h2 class="centerBoxHeading">Featured Products</h2>

                                <?php Pjax::begin(); ?>
                                <?= ColumnListView::widget([
                                    'dataProvider' => $featured,
                                    'columns' => 3, // default : 1
                                    'itemView' => '_featured',
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
                            <!-- eof: featured products  -->





                        </div>        </div>

                </div>
            </div>
            <aside class="column left_column col-xs-12 col-sm-3">
            </aside>
            <div class="clearfix"></div>
            <!--bof-custom block display-->
            <!-- bof tm custom block -->
            <!-- eof tm custom block -->

            <!--eof-custom block display-->
        </div>
    </div>
</section>
