<?php
namespace GCWorld\Interfaces;

interface PEX
{
    public const LEVEL_OVERRIDE = 3;
    public const LEVEL_ALWAYS   = 2;
    public const LEVEL_YES      = 1;
    public const LEVEL_NA       = 0;
    public const LEVEL_NO       = -1;
    public const LEVEL_NEVER    = -2;
    public const LEVEL_DISABLED = -3;

    /**
     * @param string $node
     * @return int|bool
     */
    public function pexCheck(string $node);

    /**
     * @param string $node
     * @return int|bool
     */
    public function pexCheckAny(string $node);

    /**
     * @param string $node
     * @return int|bool
     */
    public function pexCheckExact(string $node);

    /**
     * @param string $node
     * @return int|bool
     */
    public function pexCheckMax(string $node);
}
