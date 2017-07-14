<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;


?>
<div class="site-how_works">

    <div class="container">

        <h2 class="centerBoxHeading h2BoxHeadingab"><?= Yii::t('app','How Works');?></h2>

        <div class="row" style="padding-bottom: 20px">
            <div class="col-sm-1"></div>

            <?php  if (Yii::$app->language=='en') {?>
            <div class="border-grey col-sm-10">




                    <strong>How Halseca Vision works?</strong></p>

                <p> We are dedicated to the area of manufacture, import, distribution and export of video equipment,
                    cameras
                    (CCTV), and security recorders, both analogue, digital and hybrid technologies.
                </p>

                <br>

                    <strong>You have 3 way that you will contact us and order a product list</strong>

                <br>

                        <div class="col-sm-9"> <p> <strong>1. </strong> You can call our professional team at
                                <a href="tel:+19549516477">(954) 951-6477</a> at our office hours : 8am-5pm M-Fr, you'll be able
                                to make a purchase list order and get
                                the best products that fix to you.

                            </p></div>

                <br>




                        <div class="col-sm-9">
                            <p>
                        <strong>2. </strong> You can write to our professional team by the form
                        <a href="<?= Url::to(['site/contact']); ?>">Contact Us</a> or to our email's team.

                    </p>
                <br>

                <p>
                    <strong>3. </strong> You can search the <a href="<?= Url::to(['product/index']); ?>">Products</a> in
                    our page,
                    add the product to the purchase list and send to our tem, we will send you back a ready quote for
                    you.

                </p>
                 <br>

                            <div class="border-grey">
                                <p><img src="/images/Call-Center.jpg" alt=" how are halseca" style="width: 25%"> <strong>We are here
                                        to help you </strong>

                            </p>
                            </div>

                        </div>

            </div>

            <?php } ?>

            <?php  if (Yii::$app->language=='es') {?>
                <div class="border-grey col-sm-10">




                    <strong>¿Como Halseca Vision funciona?</strong></p>

                    <p>
                        Estamos dedicados al área de fabricación, importación, distribución y exportación de equipos de video,
                        Cámaras (CCTV) y grabadoras de seguridad, tanto analógicas como digitales e híbridas.
                    </p>

                    <br>

                    <strong>
                        Usted tiene 3 formas que podra contactarnos  y ordenar una lista de producto.</strong>

                    <br>

                    <div class="col-sm-9"> <p> <strong>1. </strong> Usted puede llamar a nuestros profecionales al:
                            <a href="tel:+19549516477">(954) 951-6477</a> en horas de oficina : 8am-5pm Lu-Vi, Usted podra hacer una orden de compra y obtener Los mejores productos que se ajustan a usted.

                        </p></div>

                    <br>




                    <div class="col-sm-9">
                        <p>
                            <strong>2. </strong> Usted puede contactar con nuestros profecionales mediante el formulario
                            <a href="<?= Url::to(['site/contact']); ?>">Contactenos</a> o directamente a travez de sus correos electronicos.

                        </p>
                        <br>

                        <p>
                            <strong>3. </strong> Usted puede buscar los  <a href="<?= Url::to(['product/index']); ?>">Productos</a>
                            que desea a travez de nuestra pagina y añadirlos a la Lista a enviar y eviarsela a nuestro equipo de trabajo,
                            nosotros lo contactaremos y enviaremos una quota para usted.


                        </p>
                        <br>

                        <div class="border-grey">
                            <p><img src="/images/Call-Center.jpg" alt=" how are halseca" style="width: 25%"> <strong>Estamos aqui para ayudarlo! </strong>

                            </p>
                        </div>

                    </div>

                </div>

            <?php } ?>




            <div class="col-sm-1"></div>

        </div>


    </div>

</div>
</div>