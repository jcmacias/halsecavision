<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

//
//$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            <?= Yii::t('app','Thank you for contacting us. We will respond to you as soon as possible.');?>
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                    Please configure the
                <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

    <div class="container">

        <h2 class="centerBoxHeading h2BoxHeading"><?= Yii::t('app','Contact Us');?></h2>

        <div class="form-control-block">

            <input name="securityToken" value="1b0ff7e4cc5cd8f42fa109a146e90e52" type="hidden">
            <div id="contactUsNoticeContent" class="content">
                <strong><?= Yii::t('app','Contact Us');?> </strong>
                <p><?= Yii::t('app','If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.');?></p>
            </div>

            <div class="contact_fields_wrapper clearfix">
                <div class="row">
                    <div class="contacts_left_fields col-xs-12 col-sm-6">

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <div class="form-group contact-group">

                            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                            <!--                        <input name="contactname" size="40" id="contactname" class="form-control" type="text">-->
                        </div>

                        <div class="form-group contact-group">

                            <?= $form->field($model, 'email')?>
                        </div>

                        <div class="form-group contact-group">
                            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                        </div>

                        <?php  if (Yii::$app->language=='en') {?>
                        <div class="form-group contact-group">
                            <?= Html::submitButton('Send Now', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>

                        </div>
                        <?php } ?>

                        <?php  if (Yii::$app->language=='es') {?>
                            <div class="form-group contact-group">
                                <?= Html::submitButton('Enviar Ahora', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>

                            </div>
                        <?php } ?>

                    </div>

                    <div class="col-xs-12 col-sm-6">


                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.367671393911!2d-80.17563058486871!3d26.184715383446548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d903e458c65ab3%3A0x44fb0a1bff1175f2!2s4700+W+Prospect+Rd%2C+Fort+Lauderdale%2C+FL+33309!5e0!3m2!1sen!2sus!4v1498756019853"
                            width="550" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>


                </div>


                <?php ActiveForm::end(); ?>


            </div>

            <div class="content border-grey ">
                <div class="row content " id="ourTeamContent">
                    <strong><?= Yii::t('app','Our Team');?> </strong>
                </div>
                <div class="row">

                    <div class="col-sm-3">

                        <span><?= Yii::t('app','Management Department.');?> </span>
                        <span><a href="mailto:manager@halsecavision.net">manager@halsecavision.net</a></span>

                    </div>

                    <div class="col-sm-3">

                        <span><?= Yii::t('app','Sales Representative.');?></span>
                        <span><a href="mailto:sale@halsecavision.net">sale@halsecavision.net</a></span>

                    </div>

                    <div class="col-sm-3">

                        <span><?= Yii::t('app','Technical Support.');?></span>
                        <span><a href="mailto:techsupport@halsecavision.net">techsupport@halsecavision.net</a></span>

                    </div>

                    <div class="col-sm-3">

                        <span>CEO.</span> <br>
                        <span><a href="mailto:ceo@halsecavision.net">ceo@halsecavision.net</a></span>

                    </div>

                </div>

            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
