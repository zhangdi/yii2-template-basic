<?php


namespace App\Modules\Api\Controllers;


use App\Modules\Api\Controller;
use App\Modules\Api\Models\Resp;

class OauthController extends Controller
{
    /**
     * @return Resp
     */
    public function actionToken()
    {
        $grantType = \Yii::$app->request->getBodyParam('grant_type');

        switch ($grantType) {
            case 'password':
                return $this->handleGrantByPassword();
                break;
            default:
                return Resp::error("不支持的授权类型 '{$grantType}'");
        }

    }

    /**
     * 处理密码式授权
     *
     * @return Resp
     */
    protected function handleGrantByPassword()
    {
        $request = \Yii::$app->request;
        $clientId = $request->getBodyParam('client_id');
        $username = $request->getBodyParam('username');
        $password = $request->getBodyParam('password');

        return Resp::ok([
            'client_id' => $clientId,
            'username' => $username,
            'password' => $password,
        ]);
    }
}