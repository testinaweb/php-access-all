<?php
/**
 * AccessProperty.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 05/08/15 - 10:58
 */

namespace Testinaweb\AccessAll;

class AccessProperty extends Access
{
    public static function getProperty(&$object, $propertyName)
    {
        $property = self::getReflectionClass($object)->getProperty($propertyName);
        $property->setAccessible(true);

        return $property->getValue($object);
    }
}