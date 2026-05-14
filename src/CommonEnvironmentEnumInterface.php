<?php
namespace GCWorld\Interfaces;

/**
 * CommonEnvironmentEnumInterface Interface
 */
interface CommonEnvironmentEnumInterface extends BackedEnumWithTextInterface
{
    /**
     * Useful for identifying CI/CD environments
     * @return bool
     */
    public function isCI(): bool;
}
