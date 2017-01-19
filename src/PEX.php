<?php
namespace GCWorld\Interfaces;

interface PEX
{
    /**
     * @param $node
     * @return integer|boolean
     */
    public function pexCheck($node);

    /**
     * @param $node
     * @return integer|boolean
     */
    public function pexCheckAny($node);

    /**
     * @param $node
     * @return integer|boolean
     */
    public function pexCheckExact($node);
}
