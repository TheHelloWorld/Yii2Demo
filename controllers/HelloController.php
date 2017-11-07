<?php
/**
 * Created by PhpStorm.
 * User: lzk
 * Date: 2017/11/7
 * Time: 23:36
 */

namespace app\controllers;


use yii\web\Controller;

class HelloController extends Controller
{
    public function actionInfo($message = 'Hello') {
        $this->render('info',['message' => $message]);
    }
}