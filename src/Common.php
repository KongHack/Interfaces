<?php
namespace GCWorld\Interfaces;

Interface Common
{
    /**
     * @return \GCWorld\Interfaces\Database
     */
    public function getDatabase();

    /**
     * @return \Redis
     */
    public function getCache();

    /**
     * @param $heading
     * @return array
     */
    public function getConfig($heading);
}
