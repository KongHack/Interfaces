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
     * @param string $instance
     * @return DatabaseInterface
     */
    public function getDatabase(string $instance = 'default');

    /**
     * @param string $configName
     * @param string $identifier
     * @return bool|\Redis|\RedisCluster
     */
    public function getCache(string $configName = 'default', string $identifier = '');

    /**
     * @param string $heading
     * @return array
     */
    public function getConfig(string $heading);

    /**
     * @param string $key
     * @return string
     */
    public function getDirectory(string $key);

    /**
     * @param string $key
     * @return string
     */
    public function getPath(string $key);
}
