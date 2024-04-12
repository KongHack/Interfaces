<?php
namespace GCWorld\Interfaces;

/**
 * Interface Cron
 */
interface Cron
{
    /**
     * @return bool
     */
    public function run(): bool;
}
