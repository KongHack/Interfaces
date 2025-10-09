<?php
namespace GCWorld\Interfaces;

use GCWorld\Interfaces\Database\DatabaseInterface;

/**
 * CommonInterface Interface.
 */
interface CommonInterface
{
    /**
     * @return static
     */
    public static function getInstance(): static;

    /**
     * @param string|null $instance
     * @return DatabaseInterface
     */
    public function getDatabase(?string $instance = 'default'): DatabaseInterface;

    /**
     * @param string|null $instance
     * @return void
     */
    public function closeDatabase(?string $instance = 'default'): void;

    /**
     * @param string|null $instance
     * @return null|\Redis|\RedisCluster
     */
    public function getCache(?string $instance = 'default'): null|\RedisCluster|\Redis;

    /**
     * @param string|null $instance
     * @return void
     */
    public function closeCache(?string $instance = 'default'): void;

    /**
     * @param string $heading
     * @return array
     */
    public function getConfig(string $heading): array;

    /**
     * @param string $key
     * @return string
     */
    public function getDirectory(string $key): string;

    /**
     * @param string $key
     * @return string
     */
    public function getPath(string $key): string;

    /**
     * @return string
     */
    public function getCommonVersion(): string;

    /**
     * @param bool $fresh
     * @return string
     */
    public function getProjectVersion(bool $fresh = false): string;
}
