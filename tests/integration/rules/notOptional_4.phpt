--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Validation\Exceptions\AllOfException;
use Respect\Validation\Exceptions\NotOptionalException;
use Respect\Validation\Validator as v;

try {
    v::not(v::notOptional())->check(0);
} catch (NotOptionalException $e) {
    echo $e->getMessage().PHP_EOL;
}

try {
    v::not(v::notOptional())->assert([]);
} catch (AllOfException $e) {
    echo $e->getFullMessage().PHP_EOL;
}

try {
    v::not(v::notOptional()->setName('Field'))->assert([]);
} catch (AllOfException $e) {
    echo $e->getFullMessage().PHP_EOL;
}
?>
--EXPECTF--
The value must be optional
- The value must be optional
- Field must be optional
