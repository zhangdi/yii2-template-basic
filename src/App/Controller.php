<?php


namespace App;


use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class Controller extends \yii\web\Controller
{
    /**
     * @return array
     */
    public function verbs()
    {
        return [];
    }

    /**
     * @return array
     */
    public function accessRules()
    {
        return [];
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // Access Control
        $accessRules = $this->accessRules();
        if (count($accessRules) > 0) {
            $behaviors['access'] = [
                'class' => AccessControl::class,
                'rules' => $this->accessRules(),

            ];
        }

        // Verbs
        $behaviors['verbs'] = [
            'class' => VerbFilter::class,
            'actions' => $this->verbs(),
        ];

        return $behaviors;
    }
}