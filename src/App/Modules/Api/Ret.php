<?php declare(strict_types=1);


namespace App\Modules\Api;


class Ret
{
    const CODE_OK = 0;
    const CODE_ERROR = 1000;

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
     * Ret constructor.
     * @param int $code
     * @param string|null $message
     * @param mixed $data
     */
    public function __construct(int $code, ?string $message = null, $data = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    /**
     * @param mixed $data
     * @return Ret
     */
    public static function ok($data): Ret
    {
        return new Ret(self::CODE_OK, 'ok', $data);
    }

    /**
     *
     * @param string $message
     * @return Ret
     */
    public static function error(string $message): Ret
    {
        return new Ret(self::CODE_ERROR, $message);
    }
}
