<?php


namespace App\Kernel\Rest;


use yii\filters\auth\CompositeAuth;
use yii\filters\ContentNegotiator;
use yii\filters\VerbFilter;
use yii\web\Response;

class Controller extends \yii\rest\Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::class,
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];

        $behaviors[] = [
            'class' => VerbFilter::class,
            'actions' => $this->verbs(),
        ];

        $behaviors['authenticator'] = [
            'class' => CompositeAuth::class,
            'optional' => $this->publicActions(),
        ];

        return $behaviors;
    }

    /**
     * @return array
     */
    protected function publicActions():array
    {
        return [];
    }
}
