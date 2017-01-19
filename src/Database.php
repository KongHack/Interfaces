<?php
namespace GCWorld\Interfaces;

Interface Database
{
    public function ping();

    public function tableExists($table);

    public function getWorkingDatabaseName();

    public function getTableComment($table);

    public function setTableComment($table, $comment);
}
