<?php
namespace GCWorld\Interfaces;

/**
 * Interface Database
 * @package GCWorld\Interfaces
 */
interface Database
{
    /**
     * @return mixed
     */
    public function ping();

    /**
     * @param string $table
     * @return mixed
     */
    public function tableExists(string $table);

    /**
     * @return mixed
     */
    public function getWorkingDatabaseName();

    /**
     * @param string $table
     * @return mixed
     */
    public function getTableComment(string $table);

    /**
     * @param string $table
     * @param string $comment
     * @return mixed
     */
    public function setTableComment(string $table, string $comment);
}
