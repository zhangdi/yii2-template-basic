<?php


namespace App\Modules\Api\Controllers;


use App\Modules\Api\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return [
            'name' => 'API'
        ];
    }
}