Php Access All
==============

This library is developed to allow unit tests to test private/protected methods and property values

Install
-------

Use through composer.json:
```json
{
  "require": {
    "testinaweb/php-access-all": "dev-master"
  }
}
```

Usage
-----

```php
use Testinaweb\AccessAll\AccessMethod

$result = AccessMethod::invokeMethod($myClass, 'protectedMethod', [$parameter1, $parameter2, ...]);
```

```php
use Testinaweb\AccessAll\AccessProperty

$value = AccessProperty::getProperty($myClass, 'propertyName');
```
