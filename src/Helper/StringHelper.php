<?php


namespace App\Helper;


class StringHelper
{
    /**
     * Перевести всю строку в нижний регистр
     *
     * @param string $str
     * @param string $encoding
     * @return string
     */
    public static function mb_lcfirst(string $str, string $encoding = 'UTF-8'): string
    {
        return mb_strtolower(mb_substr($str, 0, 1, $encoding), $encoding)
            . mb_substr($str, 1, null, $encoding);
    }
}