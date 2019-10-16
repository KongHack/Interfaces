<?php
namespace GCWorld\Interfaces;

interface PEX
{
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
