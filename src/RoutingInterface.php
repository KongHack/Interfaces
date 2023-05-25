<?php
namespace GCWorld\Interfaces;

/**
 * RoutingInterface Interface
 */
interface RoutingInterface
{
    public const DEFAULT_NAME = 'GCDefault';

    /**
     * @param string $name
     * @return static
     */
    public static function getInstance(string $name = self::DEFAULT_NAME): static;

    /**
     * @param string $name
     */
    public function __construct(string $name);

    /**
     * @param string $hookName
     * @param string $methodName
     * @return void
     */
    public function addHook(string $hookName, string $methodName): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return null|string
     */
    public function getFoundRouteName(): ?string;

    /**
     * @return null|string
     */
    public function getFoundRouteNameClean(): ?string;

    /**
     * @return null|array
     */
    public function getFoundRouteArguments(): ?array;

    /**
     * @return array
     */
    public function getFoundRouteData(): array;

    /**
     * @return string
     */
    public function getPathFull(): string;

    /**
     * @return string
     */
    public function getPathClean(): string;

    /**
     * @param string|null $path_info
     * @return void
     */
    public function forward(string $path_info = null): void;

    /**
     * @param string $name
     * @param array  $params
     * @return string
     */
    public function reverse(string $name, array $params = []): string;

    /**
     * @param array $params
     * @return string
     */
    public function reverseMe(array $params = []): string;

    /**
     * @param string $name
     * @param array  $params
     * @return array
     */
    public function reverseAll(string $name, array $params = []): array;

    /**
     * @param string $name
     * @param array  $params
     * @return mixed
     */
    public function reverseObject(string $name, array $params = []): mixed;

    /**
     * @param string $base
     * @return void
     */
    public function setBase(string $base): void;

    /**
     * @param string $user
     * @return void
     */
    public function setUserClassName(string $user): void;

    /**
     * @return bool
     */
    public function isXHRRequest(): bool;

    /**
     * @param array $routes
     * @return void
     */
    public function forceRoutes(array $routes): void;

    /**
     * @param \Redis $cRedis
     * @return void
     */
    public function attachRedisCache(\Redis $cRedis): void;

    /**
     * @param string|null $prefix
     * @return void
     */
    public function setRoutePrefix(string $prefix = null): void;

    /**
     * @return null|string
     */
    public function getRoutePrefix(): ?string;

    /**
     * @param string $name
     * @return void
     */
    public function setPageWrapperName(string $name): void;

    /**
     * @return null|string
     */
    public function getPageWrapperName(): ?string;

    /**
     * @return string
     */
    public function getCallingMethod(): string;
}
