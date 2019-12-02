<?php


namespace App\Kernel\Rest;


class Ret
{
    const ERROR_NONE = 0;
    const ERROR_CUSTOM = 1000;
    const CODE_MODEL_ERROR = 30000;

    /**
     * @var int
     */
    public $code;
    /**
     * @var string|null
     */
    public $message;
    /**
     * @var mixed
     */
    public $data;

    /**
     * 返回正确内容
     *
     * @param mixed $data
     * @return Ret
     */
    public static function ok($data = null): Ret
    {
        $ret = new Ret();
        $ret->code = self::ERROR_NONE;
        $ret->data = $data;
        return $ret;
    }

    /**
     * 返回错误
     *
     * @param int $code
     * @param string $message
     * @return Ret
     */
    public static function error(int $code, string $message): Ret
    {
        $ret = new Ret();
        $ret->code = $code;
        $ret->message = $message;
        return $ret;
    }

    /**
     * 返回自定义错误
     * @param string $message
     * @return Ret
     */
    public static function customError(string $message): Ret
    {
        $ret = new Ret();
        $ret->code = self::ERROR_CUSTOM;
        $ret->message = $message;
        return $ret;
    }

}
