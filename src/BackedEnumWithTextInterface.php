<?php
namespace GCWorld\Interfaces;

/**
 * Interface BackedEnumWithTextInterface.
 */
interface BackedEnumWithTextInterface extends \BackedEnum
{
    public function text(): string;
}
