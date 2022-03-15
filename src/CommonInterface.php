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
     * @param mixed $instance
     * @return DatabaseInterface
     */
    public function getDatabase($instance = 'default');

    /**
     * @param mixed $instance
     * @return \Redis
     */
    public function getCache($instance = 'default');

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
