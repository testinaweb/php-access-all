<?php
/**
 * AccessPropertyTest.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 05/08/15 - 10:58
 */

namespace Testinaweb\AccessAll\Tests;

use PHPUnit_Framework_TestCase;
use Testinaweb\AccessAll\AccessProperty;

class MyPropertiesClass
{
    public $publicProperty = 'abc';
    private $privateProperty = 'abc';
    protected $protectedProperty = 'abc';
}

class AccessPropertyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MyPropertiesClass
     */
    private $myClass;

    public function setUp()
    {
        $this->myClass = new MyPropertiesClass();
    }

    public function testPublic()
    {
        $result = AccessProperty::getProperty($this->myClass, 'publicProperty');
        $this->assertEquals('abc', $result);
    }

    public function testPrivate()
    {
        $result = AccessProperty::getProperty($this->myClass, 'privateProperty');
        $this->assertEquals('abc', $result);
    }

    public function testProtected()
    {
        $result = AccessProperty::getProperty($this->myClass, 'protectedProperty');
        $this->assertEquals('abc', $result);
    }
}