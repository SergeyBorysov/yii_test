<?php

namespace frontend\controllers;
use \yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $this -> layout = "bootstrap";
        return $this->render('index');
    }
    public function actionBuy()
    {
        // $this -> layout = "bootstrap";
        return $this->render('buy');
    }
    public function actionRent()
    {
        // $this -> layout = "bootstrap";
        return $this->render('rent');
    }
    public function actionSell()
    {
        // $this -> layout = "bootstrap";
        return $this->render('sell');
    }

}
