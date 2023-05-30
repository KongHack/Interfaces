<?php
namespace GCWorld\Interfaces\Patterns;

/**
 * SingletonInterface Interface
 */
interface SingletonInterface
{
    /**
     * @return self
     */
    public static function getInstance(): self;

}
