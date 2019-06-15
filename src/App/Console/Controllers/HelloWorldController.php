<?php


namespace App\Console\Controllers;


use App\Console\Controller;

/**
 * Hello World
 */
class HelloWorldController extends Controller
{
    /**
     * Say Hello World
     */
    public function actionIndex()
    {
        echo "Hello World!\n";
    }
}