<?php declare(strict_types=1);

namespace Igni\Exception;

/**
 * Exception thrown if an error which can only be found on runtime occurs
 */
class RuntimeException extends \RuntimeException implements Exception
{
}
