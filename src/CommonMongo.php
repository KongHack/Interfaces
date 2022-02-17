<?php
namespace GCWorld\Interfaces;

/**
 * Interface CommonMongo
 */
interface CommonMongo
{
    /**
     * @param string $instance
     *
     * @return \MongoDB\Client
     */
    public function getMongo(string $instance = 'default'): \MongoDB\Client;
}
