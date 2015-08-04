<?php
namespace GCWorld\Interfaces;

Interface Database
{
    public function ping();
    public function tableExists($table);
}
