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
     * @return void
     */
    public function setBreadcrumbs(): void;
}
