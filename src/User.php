<?php
namespace GCWorld\Interfaces;

/**
 * Interface User
 * @package GCWorld\Interfaces
 * @deprecated  Use UserInterface Instead
 */
interface User
{
    /**
     * @return mixed
     */
    public function sessCheck();

    /**
     * @return mixed
     */
    public function getVal();

    /**
     * @return mixed
     */
    public function getObject();

    /**
     * @return mixed
     */
    public function getID();

    /**
     * @param string $message
     * @param string $class
     * @return mixed
     */
    public function addMessage(string $message, string $class = 'sitespecific');

    /**
     * @return mixed
     */
    public function printMessages();

    /**
     * @param string $key
     * @return mixed
     */
    public function getSetting(string $key);

    /**
     * @param string $key
     * @param mixed  $value
     * @return mixed
     */
    public function setSetting(string $key, $value);
}
