<?php
namespace GCWorld\Interfaces;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * Interface TwigInterface.
 */
interface TwigInterface
{
    /**
     * @return Environment
     */
    public static function get(): Environment;

    /**
     * @return FilesystemLoader
     */
    public static function getLoader(): FilesystemLoader;

    /**
     * @param string     $name
     * @param array|null $context
     *
     * @return string
     */
    public static function render(string $name, array $context = null): string;
}
