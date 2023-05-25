<?php
namespace GCWorld\Interfaces;

/**
 * PageWrapper Interface.
 */
interface PageWrapper
{
    /**
     * @return static
     */
    public static function getInstance(): static;

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $desc
     * @return $this
     */
    public function setDesc(string $desc): static;

    /**
     * @return string
     */
    public function getDesc(): string;

    /**
     * @param string $keywords
     * @return $this
     */
    public function setKeywords(string $keywords): static;

    /**
     * @return string
     */
    public function getKeywords(): string;
}
