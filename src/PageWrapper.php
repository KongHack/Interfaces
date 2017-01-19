<?php
namespace GCWorld\Interfaces;

Interface PageWrapper
{
    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param $desc
     * @return $this
     */
    public function setDesc($desc);

    /**
     * @return string
     */
    public function getDesc();

    /**
     * @param $desc
     * @return $this
     */
    public function setKeywords($desc);

    /**
     * @return string
     */
    public function getKeywords();

}