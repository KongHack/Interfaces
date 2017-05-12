<?php
namespace GCWorld\Interfaces;

interface Common
{
    /**
     * @param string $instance
     * @return \GCWorld\Interfaces\Database
     */
    public function getDatabase(string $instance = 'default');

    /**
     * @param string $instance
     * @return \Redis
     */
    public function getCache(string $instance = 'default');

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
