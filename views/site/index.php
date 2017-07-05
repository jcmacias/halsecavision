<?php

/* @var $this yii\web\View */

use circulon\widgets\ColumnListView;
use yii\widgets\Pjax;
use yii\helpers\Url;

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
                <div class="col-sm-4 col-xs-4 item item_1"><a href="<?= Url::to(['category/view', 'id' => 4]); ?>"><img src="images/item1.png" class="img-responsive"  alt="Camera AHD/CVI/TVI/SDI." title=" Camera " width="370" height="217" /><div class="title"><div class="capt bounce-to-bottom"><h3><b>Camera</b> HD/IP/WIFI </h3><p>Your eyes when you are not there, choose modern technology with us. </p></div></div></a>
                </div><div class="col-sm-4 col-xs-4 item item_2"><a href="<?= Url::to(['category/view', 'id' => 3]); ?>"><img src="images/item2.png" class="img-responsive" alt="WIFI/IP/PLC Quick to install / Maximum quality.." title="Security camera kits" width="370" height="217" /><div class="title"><div class="capt bounce-to-bottom"><h3><b>Kits </b>WIFI/IP/PLC</h3><p>Quick to install / Maximum quality / Competitive prices.</p></div></div></a>
                </div><div class="col-sm-4 col-xs-4 item item_3"><a href="<?= Url::to(['category/view', 'id' => 1]); ?>"><img src="images/item3.png" class="img-responsive" alt="PTZ Camera, Make possible to monitor large areas with a single security camera." title="Categotia1" width="370" height="217" /><div class="title"><div class="capt bounce-to-bottom"><h3><b>PTZ</b> Camera</h3><p>Make possible to monitor large areas with a single security camera.</p></div></div></a>
                </div>          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            </div>
            <div class="main-col left_column  col-sm-12 ">

                <div class="row">

                    <div class="center_column col-xs-12 col-sm-12 with_col ">
                        <div class="centerColumn" id="indexDefault">

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
                                    'layout' => "{items}",

                                ])

                                ?>
                                <?php Pjax::end(); ?>

                            </div>
                            <!-- eof: featured products  -->

<!-- Video home and add-->

            <div class="row col-sm-12" >

<!--                <h2 class="centerBoxHeading h2BoxHeading col-sm-8">Record with us</h2>-->

                <div class="col-sm-6">
                        <h2 class="centerBoxHeading h2BoxHeading col-sm-12">Record with us</h2>
                        <div class="row col-sm-12" >
                            <video controls class="col-sm-6">
                                <source src="../uploads/File_000.mp4" type="video/mp4; codecs= avc1.42E01E, mp4a.40.2">
                                Tu navegador no implementa el elemento <code>video</code>.

                            </video>
                            <video controls class="col-sm-6">
                                <source src="../uploads/File_000.mp4" type="video/mp4; codecs= avc1.42E01E, mp4a.40.2">
                                Tu navegador no implementa el elemento <code>video</code>.

                            </video>
                        </div>

                        <div class="row col-sm-12" >
                            <video controls class="col-sm-6">
                                <source src="../uploads/File_000.mp4" type="video/mp4; codecs= avc1.42E01E, mp4a.40.2">
                                Tu navegador no implementa el elemento <code>video</code>.

                            </video>
                            <video controls class="col-sm-6">
                                <source src="../uploads/File_000.mp4" type="video/mp4; codecs= avc1.42E01E, mp4a.40.2">
                                Tu navegador no implementa el elemento <code>video</code>.

                            </video>
                        </div>
                </div>

                <div class="col-sm-6">
                    <h2 class="centerBoxHeading h2BoxHeading col-sm-12">Where we are?</h2>

                            <div> <img src="/images/WeAreIn.png" alt="Halseca Vision are In" class="col-sm-10"></div>

                </div>
            </div>


                            <!--end  Video home-->
                        </div>
                    </div>

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
