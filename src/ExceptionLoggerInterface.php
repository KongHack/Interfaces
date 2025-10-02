<?php
namespace GCWorld\Interfaces;

use Exception;
use Throwable;

/**
 * ExceptionLoggerInterface
 */
interface ExceptionLoggerInterface
{
    public static function logException(Exception|Throwable $e): void;
}
