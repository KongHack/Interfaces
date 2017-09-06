<?php
namespace GCWorld\Interfaces;

/**
 * Interface AdvancedHandlerInterface
 */
interface AdvancedHandlerInterface
{
    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param array $args
     */
    public function setBreadcrumbs(array $args): void;
}
