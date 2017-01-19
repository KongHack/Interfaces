<?php
namespace GCWorld\Interfaces;

interface User
{
    public function sessCheck();

    public function getVal();

    public function getObject();

    public function getID();

    public function addMessage($message, $class = 'sitespecific');

    public function printMessages();

    public function getSetting($key);

    public function setSetting($key, $value);

}
