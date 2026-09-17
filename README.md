# GCWorld Interfaces

Shared PHP contracts used to keep GCWorld applications and libraries compatible
without coupling their implementations. The package contains interfaces and
permission-level constants; it does not provide concrete services.

### Version
4.5.0

## Requirements

- PHP 8.4 or newer
- Composer 2
- Twig 3

Some contracts refer to optional services such as Redis, Redis Cluster, and the
MongoDB PHP library. Only applications implementing those contracts need to
install and configure the corresponding extension or package.

## Installation

Install the package through Composer:

```console
composer require gcworld/interfaces
```

## Usage

Implement the narrowest contract needed by the consuming application. For
example, a renderable UI object can depend on `UIRenderableInterface` without
depending on a particular view implementation:

```php
<?php

use GCWorld\Interfaces\UIRenderableInterface;

final class StatusBadge implements UIRenderableInterface
{
    public function __construct(private readonly string $label)
    {
    }

    public function render(): string
    {
        return sprintf('<span class="status">%s</span>', htmlspecialchars($this->label));
    }
}
```

Consumers can then type against the shared contract:

```php
function renderWidget(UIRenderableInterface $widget): string
{
    return $widget->render();
}
```

## Available contracts

| Area | Contracts | Purpose |
| --- | --- | --- |
| Application services | `CommonInterface`, `CommonEnvironmentEnumInterface`, `CommonMongo` | Shared access to application configuration, paths, versions, environments, databases, caches, and MongoDB clients. |
| Database | `DatabaseInterface`, `DatabaseStatementInterface` | PDO-like database connection and statement abstractions. |
| HTTP and presentation | `RoutingInterface`, `PageWrapper`, `TwigInterface` | Routing, page metadata and notices, and Twig environment access. |
| UI | `UIButton`, `UICoreInterface`, `UIRenderableInterface` | Renderable UI elements and UI definition access. |
| User and session | `UserInterface`, `SessionInterface` | User settings, CSRF operations, messages, and session access. |
| Authorization | `PEX` | Permission checks and the shared permission-level constants. |
| Workers and scheduling | `Cron`, `GMWorkerInterface` | Scheduled task and worker entry points. |
| Models and enums | `ORMDescriptionInterface`, `BackedEnumWithTextInterface` | ORM field metadata and display text for backed enums. |
| Lifecycle patterns | `SingletonInterface`, `MultitonInterface` | Shared singleton and named-instance access patterns. |
| Errors | `ExceptionLoggerInterface`, `HasExceptionContext`, `SimpleTokenInterface` | Exception logging, structured exception context, and token-bearing exceptions. |

The namespace root is `GCWorld\Interfaces`. Database contracts live under
`GCWorld\Interfaces\Database`, and lifecycle contracts live under
`GCWorld\Interfaces\Patterns`.

## Development

The supported local environment uses the same public KongHack PHP 8.4 image as
CI:

```console
./dc up -d
./dc exec php composer install
./dc exec php composer check
./dc down
```

The committed Compose configuration mounts only this repository and runs with
the invoking developer's UID and GID. It does not expose host SSH keys or
Composer credentials. Developers who need private Composer authentication can
copy `docker-compose.override.yml.example` to the ignored
`docker-compose.override.yml`; that local override exposes Composer credentials
and SSH keys to the container and should only be enabled when required.

Individual checks are also available:

```console
./dc exec php composer lint
./dc exec php composer phpstan
./dc exec php composer phpcs
```

PHPStan runs at level 6, and PHPCS enforces PSR-12 errors while ignoring
advisory warnings such as line length.

GitHub Actions runs the suite on PHP 8.4 and 8.5. Dependabot checks the Composer
lockfile and non-major GitHub Actions updates weekly.

## Releases

Releases use bare semantic-version tags such as `4.4.14`. Before tagging a
release:

1. Add the release notes to the matching version section in `CHANGELOG.md`.
2. Update `VERSION` and the value immediately below `### Version` in this file.
3. Push the release commit and its matching tag.

GitHub Actions validates all three version references and the complete quality
matrix before creating a GitHub Release from the matching changelog section.
Release tags must not be moved or reused.

## Compatibility

This package is consumed by many downstream repositories. Public method
signatures, inherited interfaces, and constants are compatibility contracts;
breaking changes require coordinated downstream work and a new major release.

## License

Proprietary.
