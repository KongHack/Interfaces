<?php
namespace GCWorld\Interfaces\Patterns;

/**
 * MultitonInterface Interface
 */
interface MultitonInterface
{
    /**
     * @param mixed $name
     * @return self
     */
    public static function getInstance(mixed $name): self;

}
