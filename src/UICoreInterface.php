<?php
namespace GCWorld\Interfaces;

/**
 * Interface UICoreInterface.
 */
interface UICoreInterface
{
    /**
     * @param string $key
     *
     * @return array|null
     */
    public static function get(string $key): ?array;

    /**
     * @param string $key
     *
     * @return array|null
     */
    public function getItem(string $key): ?array;

    /**
     * @return array
     */
    public function getAllDefinitions(): array;

    /**
     * @param string $text
     *
     * @return string
     */
    public static function fixTooltip(string $text): string;
}
