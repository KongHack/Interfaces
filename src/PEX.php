<?php
namespace GCWorld\Interfaces;

interface PEX
{
    /**
     * @param string $node
     * @return integer|boolean
     */
    public function pexCheck(string $node);

    /**
     * @param string $node
     * @return integer|boolean
     */
    public function pexCheckAny(string $node);

    /**
     * @param string $node
     * @return integer|boolean
     */
    public function pexCheckExact(string $node);
}
