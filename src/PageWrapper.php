<?php
namespace GCWorld\Interfaces;

interface PageWrapper
{
    /**
     * @return self
     */
    public static function getInstance();

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $desc
     * @return $this
     */
    public function setDesc(string $desc);

    /**
     * @return string
     */
    public function getDesc();

    /**
     * @param string $desc
     * @return $this
     */
    public function setKeywords(string $desc);

    /**
     * @return string
     */
    public function getKeywords();
}
