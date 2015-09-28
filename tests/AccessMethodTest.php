<?php
/**
 * AccessMethodTest.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 05/08/15 - 10:58
 */

namespace Testinaweb\AccessAll\Tests;

use PHPUnit_Framework_TestCase;
use Testinaweb\AccessAll\AccessMethod;

class MyMethodsClass
{
    public function publicMethod($value)
    {
        return $value;
    }

    private function privateMethod($value)
    {
        return $value;
    }

    protected function protectedMethod($value)
    {
        return $value;
    }
}

class AccessMethodTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MyMethodsClass
     */
    private $myClass;

    public function setUp()
    {
        $this->myClass = new MyMethodsClass();
    }

    /**
     * @dataProvider dataProvider
     */
    public function testPublic($value)
    {
        $result = AccessMethod::invokeMethod($this->myClass, 'publicMethod', [$value]);
        $this->assertEquals($value, $result);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testPrivate($value)
    {
        $result = AccessMethod::invokeMethod($this->myClass, 'privateMethod', [$value]);
        $this->assertEquals($value, $result);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testProtected($value)
    {
        $result = AccessMethod::invokeMethod($this->myClass, 'protectedMethod', [$value]);
        $this->assertEquals($value, $result);
    }

    public function dataProvider()
    {
        return [
            [1],
            [[1, 'a', [2, 'b']]],
            ['abc'],
            [null],
            [new \stdClass()]
        ];
    }
}