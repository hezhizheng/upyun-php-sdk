<?php
namespace Upyun\Tests;

use PHPUnit\Framework\TestCase;
use Upyun\Signature;
use Upyun\Config;

class SignatureTest extends TestCase
{

    /**
     * @var Config;
     */
    public $config;

    public function testGetBodySignature()
    {
        $this->config = new Config('bucket', 'operator', 'password');
        $sign = Signature::getBodySignature($this->config, 'POST', '/bucket');
        $this->assertEquals($sign, 'UPYUN operator:Xx3G6+DAvUyCL2Y2npSW/giTFI8=');
    }
}
