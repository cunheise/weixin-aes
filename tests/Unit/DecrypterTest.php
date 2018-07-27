<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 2018/7/27
 * Time: 13:50
 */

namespace Tests\Unit\Wx;


use Wx\Decrypter;

/**
 * Class DecrypterTest
 * @package Tests\Unit\Wx
 */
class DecrypterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @throws \Wx\Exception\DecryptException
     */
    public function testDecrypt()
    {
        $options = [
            'appid' => 'wx4f4bc4dec97d474b',
            'session_key' => 'tiihtNczf5v6AKRyjwEUhQ==',
        ];
        $data = json_decode((new Decrypter($options))->decrypt(['iv' => 'r7BXXKkLb8qrSNn05n0qiA==',
            'encrypted_data' => 'CiyLU1Aw2KjvrjMdj8YKliAjtP4gsMZMQmRzooG2xrDcvSnxIMXFufNstNGTyaGS9uT5geR
            a0W4oTOb1WT7fJlAC+oNPdbB+3hVbJSRgv+4lGOETKUQz6OYStslQ142dNCuabNPGBzlooOmB231qMM85d2/fV6Ch
            evvXvQP8Hkue1poOFtnEtpyxVLW1zAo6/1Xx1COxFvrc2d7UL/lmHInNlxuacJXwu0fjpXfz/YqYzBIBzD6WUfTIF
            9GRHpOn/Hz7saL8xz+W//FRAUid1OksQaQx4CMs8LOddcQhULW4ucetDf96JcR3g0gfRK4PC7E/r7Z6xNrXd2UIeo
            rGj5Ef7b1pJAYB6Y5anaHqZ9J6nKEBvB4DnNLIVWSgARns/8wR2SiRS7MNACwTyrGvt9ts8p12PKFdlqYTopNHR1V
            f7XjfhQlVsAJdNiKdYmYVoKlaRv85IfVunYzO0IKXsyl7JCUjCpoG20f0a04COwfneQAGGwd5oa+T8yO5hzuyDb/X
            cxxmK01EpqOyuxINew==']), true);
        $this->assertEquals($data['openId'], 'oGZUI0egBJY1zhBYw2KhdUfwVJJE');
    }
}
