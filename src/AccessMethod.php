<?php
/**
 * AccessMethod.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 05/08/15 - 10:58
 */

namespace Testinaweb\AccessAll;

class AccessMethod extends Access
{
    public static function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $method = self::getReflectionClass($object)->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }
}