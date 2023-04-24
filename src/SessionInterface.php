<?php
namespace GCWorld\Interfaces;

use SessionHandlerInterface;
use SessionIdInterface;
use SessionUpdateTimestampHandlerInterface;

// phpcs:ignoreFile

/**
 * SessionInterface Interface.
 */
interface SessionInterface extends SessionHandlerInterface, SessionIdInterface, SessionUpdateTimestampHandlerInterface
{
    /**
     * @return void
     */
    public static function init(): void;

    /**
     * @return static
     */
    public static function getInstance(): static;

    /**
     * @param string $key
     * @param mixed $value
     *
     * @return bool
     */
    public function set(string $key, mixed $value): bool;

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get(string $key): mixed;

    /**
     * @return array|null
     */
    public function getAll(): ?array;

    /**
     * @return bool
     */
    public static function session_start(): bool;

    /**
     * @return string|null
     */
    public function getSessionKey(): ?string;
}
