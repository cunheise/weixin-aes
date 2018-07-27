<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 2018/7/27
 * Time: 13:37
 */

namespace Wx;

use ErrorCode;
use Wx\Exception\DecryptException;
use WXBizDataCrypt;

/**
 * Class Decrypter
 * @package Wx
 */
class Decrypter
{
    /**
     * @var WXBizDataCrypt $wxBizDataCrypt
     */
    protected $wxBizDataCrypt;

    /**
     * Decrypter constructor.
     * @param array $options
     */
    public function __construct($options)
    {
        $this->wxBizDataCrypt = new WXBizDataCrypt($options['appid'], $options['session_key']);
    }

    /**
     * @param array $options
     * @return string
     */
    public function decrypt($options)
    {
        $code = $this->wxBizDataCrypt->decryptData($options['encrypted_data'], $options['iv'], $data);
        if (ErrorCode::$OK != $code) {
            throw DecryptException::fromCode($code);
        }
        return $data;
    }
}