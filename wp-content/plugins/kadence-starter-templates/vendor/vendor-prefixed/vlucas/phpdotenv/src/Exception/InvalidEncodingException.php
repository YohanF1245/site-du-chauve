<?php
/**
 * @license BSD-3-Clause
 *
 * Modified by kadencewp on 29-May-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace KadenceWP\KadenceStarterTemplates\Dotenv\Exception;

use InvalidArgumentException;

final class InvalidEncodingException extends InvalidArgumentException implements ExceptionInterface
{
    //
}
