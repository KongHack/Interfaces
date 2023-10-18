<?php
namespace GCWorld\Interfaces;

/**
 * Interface GMWorkerInterface.
 */
interface GMWorkerInterface
{
    /**
     * @return string
     */
    public static function getKey(): string;

    /**
     * @return int
     */
    public static function getNumWorkers(): int;

    /**
     * @return bool
     */
    public static function isLoggingEnabled(): bool;

    /**
     * @return array
     */
    public static function getAcceptableExceptions(): array;

    /**
     * @param array $data
     *
     * @return mixed
     */
    public static function execute(array $data);
}
