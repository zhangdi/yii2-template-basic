<?php


namespace App\Modules\Api\Models;


use yii\base\BaseObject;

class Resp extends BaseObject
{
    const ERROR_NONE = 0;
    const ERROR_ERROR = 1000;

    /**
     * @var int
     */
    public $errorCode = self::ERROR_NONE;
    /**
     * @var string|null
     */
    public $errorMessage = null;
    /**
     * @var mixed
     */
    public $data;

    /**
     * @param mixed $data
     * @return Resp
     */
    public static function ok($data = null)
    {
        return new Resp([
            'data' => $data,
        ]);
    }

    /**
     * @param string $errorMessage
     * @param mixed $data
     * @return Resp
     */
    public static function error(string $errorMessage, $data = null)
    {
        return new Resp([
            'errorCode' => self::ERROR_ERROR,
            'errorMessage' => $errorMessage,
            'data' => $data,
        ]);
    }
}