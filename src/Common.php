<?php
namespace GCWorld\Interfaces;

Interface Common
{
    /**
     * @return \GCWorld\Interfaces\Database
     */
    public function getDatabase($instance = 'default');

    /**
     * @return \Redis
     */
    public function getCache($instance = 'default');

    /**
     * @param $heading
     * @return array
     */
    public function getConfig($heading);
}
