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
     */
    public function setSetting(string $key, mixed $value): void;

    /**
     * @param string $key
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
}
