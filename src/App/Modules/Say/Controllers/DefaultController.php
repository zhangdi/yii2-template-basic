<?php


namespace App\Modules\Say\Controllers;


use App\Modules\Say\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}