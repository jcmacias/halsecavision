<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


?>
<div class="site-about">

    <div class="container">

        <h2 class="centerBoxHeading h2BoxHeadingab"><?= Yii::t('app','About Us');?></h2>

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
                <div class="border-grey">
                    <p>


                    <p><strong>¿Quienes somos?</strong></p>

                    <strong>Halseca Vision</strong> es una marca de <strong>Halseca International Group L.L.C.</strong>,
                    dedicada al área de fabricación, importación, distribución y exportación de equipos de video,
                    cámaras (CCTV), y grabadores de seguridad, tanto analógicos, digitales y tecnologias hibridas.
                    </p>

                    <p>
                        En Halseca Vision somos proveedores especializados en ofrecer soluciones
                        de seguridad de alta calidad tanto al mayor como al detal. Aspirando siempre a estar en la vanguardia
                        del mercado ofreciendo productos de ultima tecnología, Ofrecemos a nuestros clientes los equipos más
                        soﬁsticados de última generación, entrenamiento y soporte técnico,también los ayudamos en la elaboración
                        y conﬁguración de sus proyectos, sin costos adicionales.
                    </p>
                </div>

                <br>
                <br>
                <div class="content form-control-block ">

                    <p><strong> Misión </strong></p>
                    <p>
                        Nuestra misión es brindar a nuestros clientes tanto mayoristas como al detal nuestros productos
                        de sistemas de video vigilancia. Ofreciendo siempre la mejor calidad, tecnología, entrenaamiento
                        y soporte técnico del mercado,  proporcionando un servicio de calidad que satisfaga sus necesidades
                        y expectativas.

                    </p>

                    <p>  <strong>Visión</strong></p>

                    <p>
                        Nuestra visión es llegar al máximo nivel de excelencia y competividad del mercado, manteniendo la ﬁrme
                        decisión de superarnos día a día en la calidad y variedad de nuestros productos y servicios, asegurándonos
                        de la protección y el resguardo de los intereses de nuestros clientes más allá de cualquier relación contractual.
                    </p>
                </div>
            <?php }?>
        </div>

    </div>
</div>