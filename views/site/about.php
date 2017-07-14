<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


?>
<div class="site-about">

    <div class="container">

        <h2 class="centerBoxHeading h2BoxHeadingab">About Us</h2>

        <div class="content form-control-block">
            <?php  if (Yii::$app->language=='en') {?>

            <div class="border-grey">
                <p>


                <p><strong>Who we are?</strong></p>

                <strong>Halseca Vision</strong> is a brand of <strong>Halseca International Group L.L.C.</strong>,
                dedicated to the area of manufacture, import, distribution and export of video equipment, cameras
                (CCTV), and security recorders, both analogue, digital and hybrid technologies.
                </p>

                <p>
                    At Halseca Vision we are specialized suppliers in offering high quality security solutions to both
                    the major and retail. Always striving to be at the forefront of the market by offering
                    state-of-the-art products, we offer our customers the most sophisticated equipment of the latest
                    generation, training and technical support, we also help them in the elaboration and configuration
                    of their projects, without additional costs.
                </p>
            </div>

            <br>
            <br>
            <div class="content form-control-block ">

                <p><strong> Mission </strong></p>
                <p>
                    Our mission is to provide our customers both wholesale and retail our products of video surveillance
                    systems. Always offering the best quality, technology, training and technical support of the market,
                    providing a quality service that meets your needs and expectations.
                </p>

                <p>  <strong>Vision</strong></p>

                <p>
                    Our vision is to reach the highest level of excellence and competitiveness of the market,
                    maintaining the firm decision to surpass ourselves every day in the quality and variety of our
                    products and services, ensuring the protection of the interests of our customers.
                </p>
            </div>
            <?php } ?>
            <?php  if (Yii::$app->language=='es') {?>
                <p> falta traduccion</p>
            <?php }?>
        </div>

    </div>
</div>