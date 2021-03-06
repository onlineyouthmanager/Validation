--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Validation\Exceptions\AllOfException;
use Respect\Validation\Exceptions\NotOptionalException;
use Respect\Validation\Validator as v;

try {
    v::notOptional()->check(null);
} catch (NotOptionalException $e) {
    echo $e->getMessage().PHP_EOL;
}

try {
    v::notOptional()->assert('');
} catch (AllOfException $e) {
    echo $e->getFullMessage().PHP_EOL;
}
?>
--EXPECTF--
The value must not be optional
- The value must not be optional
