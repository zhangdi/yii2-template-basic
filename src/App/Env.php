<?php


namespace App;


class Env
{
    public static $trueValues = [
        '1',
        'true',
        'on',
        'yes'
    ];

    /**
     * @param string $name
     * @param null|mixed $defaultValue
     * @return array|false|string|null
     */
    public static function get(string $name, $defaultValue = null)
    {
        $value = \getenv($name);
        if ($value === false) {
            return $defaultValue;
        }
        return $value;
    }

    /**
     * @param string $name
     * @param bool $defaultValue
     * @return bool
     */
    public static function getBoolean(string $name, bool $defaultValue = false): bool
    {
        $value = \getenv($name);
        if ($value === false) {
            return $defaultValue;
        }
        return in_array(strtolower($value), self::$trueValues);
    }
}
