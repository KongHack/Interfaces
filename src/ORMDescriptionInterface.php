<?php
namespace GCWorld\Interfaces;

/**
 * Interface ORMDescriptionInterface
 */
interface ORMDescriptionInterface
{
    /**
     * @param string $fieldName
     * @return string|null
     */
    public static function getORMFieldTitle(string $fieldName): ?string;

    /**
     * @param string $fieldName
     * @return string|null
     */
    public static function getORMFieldDesc(string $fieldName): ?string;

    /**
     * @param string $fieldName
     * @return string|null
     */
    public static function getORMFieldHelp(string $fieldName): ?string;

    /**
     * @param string $fieldName
     * @return int
     */
    public static function getORMFieldMaxLength(string $fieldName): int;
}
