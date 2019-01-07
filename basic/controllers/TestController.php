<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 06.01.2019
 * Time: 20:07
 */

namespace app\controllers;


use yii\web\Controller;

class TestController extends Controller {
public function actionRenderTest() {
    return $this->render("test");
}
}