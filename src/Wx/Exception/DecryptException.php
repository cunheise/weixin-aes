<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 2018/7/27
 * Time: 13:31
 */

namespace Wx\Exception;


use Exception;

/**
 * Class DecryptException
 * @package Wx\Exception
 */
class DecryptException extends Exception
{
    /**
     * @var array $errorMessages
     */
    protected static $errorMessages = [
        -41001 => 'encodingAesKey非法',
        -41003 => 'aes解密失败',
        -41004 => '解密后得到的buffer非法',
        -41005 => 'base64加密失败',
        -41016 => 'base64解密失败'
    ];

    /**
     * @param int $code
     * @return DecryptException
     */
    public static function fromCode($code)
    {
        return new static(self::$errorMessages[$code], $code);
    }

}