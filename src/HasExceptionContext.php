<?php
namespace GCWorld\Interfaces;

/**
 * HasExceptionContext Interface.
 */
interface HasExceptionContext
{
    /**
     * @return array
     */
    public function getContext(): array;
}