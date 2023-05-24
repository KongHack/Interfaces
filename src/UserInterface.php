<?php
namespace GCWorld\Interfaces;

/**
 * Class UserInterface.
 */
interface UserInterface
{
    /**
     * @param string $key
     * @param mixed  $value
     * @return void
     */
    public function setSetting(string $key, mixed $value): void;

    /**
     * @param string $key
     * @return void
     */
    public function removeSetting(string $key): void;

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getSetting(string $key): mixed;

    /**
     * @return string|null
     */
    public function getMemberUuid(): ?string;

    /**
     * @return string
     */
    public function getCSRFToken(): string;

    /**
     * @return string
     */
    public function getCSRFTokenName(): string;

    /**
     * @return bool
     */
    public function checkCSRF(): bool;

    /**
     * @param string $token
     *
     * @return bool
     */
    public function checkCSRFToken(string $token): bool;

    /**
     * @return bool
     */
    public function isLoggedIn(): bool;

    /**
     * @param string $message
     * @param string $class
     * @return void
     */
    public function addMessage(string $message, string $class = 'sitespecific'): void;

    /**
     * @return array
     */
    public function getMessages(): array;

    /**
     * @return void
     */
    public function clearMessages(): void;
}
