<?php

namespace app\controllers;
use yii;
use yii\web\Controller;


class LangController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index');
    }
}