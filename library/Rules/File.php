<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Validation\Rules;

class File extends AbstractRule
{
    public function validate($input): bool
    {
        if ($input instanceof \SplFileInfo) {
            return $input->isFile();
        }

        return is_string($input) && is_file($input);
    }
}
