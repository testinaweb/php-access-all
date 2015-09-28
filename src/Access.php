<?php
/**
 * Access.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 28/09/15 - 17:19
 */

namespace Testinaweb\AccessAll;

use ReflectionClass;

abstract class Access
{
    protected static function getReflectionClass(&$object)
    {
       return new ReflectionClass(get_class($object));
    }
}