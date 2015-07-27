<?php
namespace GCWorld\Interfaces;

interface PEX
{
    public function pexCheck($node);
    public function pexCheckAny($node);
    public function pexCheckExact($node);
}
