# Upgrade to CodeIgniter 4.7.0 — Summary

This file summarises the manual project-space changes required when upgrading from CodeIgniter 4.6.x → 4.7.0 and lists the commands to update dependencies.

## Summary of changes applied to this project

- `composer.json`
  - Updated PHP requirement to `^8.2`.
  - Updated `codeigniter4/framework` constraint to `^4.7`.

- `app/Config/Migrations.php`
  - Added: `public bool $lock = false;` — enables optional distributed locking for migrations.

- `app/Config/Hostnames.php` (new)
  - Added file with `public array $hostnames = [];` to support hostname routing patterns.

- `app/Config/WorkerMode.php` (new)
  - Added new config for FrankenPHP worker mode with properties:
    - `public array $persistentServices = []`
    - `public array $cleanupServices = []`
    - `public int $garbageCollectionFrequency = 500`
    - `public int $maxRequests = 0`

- `app/Config/CURLRequest.php`
  - Added connection options used by `CURLRequest`:
    - `public bool $shareConnection = false`
    - `public int $dnsCacheTimeout = 3600`
    - `public bool $freshConnect = false`

- `app/Config/Cache.php`
  - Added APCu handler support: imported `ApcuHandler` and added `'apcu' => ApcuHandler::class` to `$validHandlers`.
  - Added `public array $cacheStatusCodes = [];` (controls which HTTP status codes PageCache will cache).

- `app/Config/Format.php`
  - Added `public int $jsonEncodeDepth = 0;` to control `json_encode()` depth.

- `app/Config/Email.php`
  - Added `public string $SMTPAuthMethod = 'LOGIN';` to allow explicit SMTP auth method selection.

- `app/Config/Encryption.php`
  - Added `public array $previousKeys = [];` to support encryption key rotation fallback.

- `app/Config/Images.php`
  - Marked `public string $libraryPath` as `@deprecated 4.7.0` (kept for backward compatibility).

- `app/Config/Paths.php`
  - Added `public string $envDirectory = ROOTPATH;` (allows moving `.env` file location).

- `public/index.php` and `spark`
  - Updated PHP minimum check to `8.2` in both files.

## Files that needed ***Manual Changes***

These files received changes in the upstream project and may contain comment or minor doc updates; review and merge as needed:
- `app/Config/CURLRequest.php` (done)
- `app/Config/Cache.php` (done)
- `app/Config/ContentSecurityPolicy.php` (done)
- `app/Config/Email.php` (done)
- `app/Config/Encryption.php` (done)
- `app/Config/Format.php` (done)
- `app/Config/Images.php` (done)
- `app/Config/Migrations.php` (done)
- `app/Config/Optimize.php` (done)
- `app/Config/Paths.php` (done)
- `app/Config/Routing.php` (done)
- `app/Config/Session.php` (done)
- `app/Config/Toolbar.php` (done)
- `app/Config/UserAgents.php` (done)
- `app/Config/View.php` (done)
- `public/index.php` (done)
- `spark` (done)

## Commands to run

Run these in your project root (`play` directory):

```bash
cd /home/ampm/projects/docker_2026/php_caddy/play

# Option A: Require exact framework constraint and update composer.json + lock
composer require codeigniter4/framework:^4.7 --no-interaction

# Option B: Update only the framework package (respects composer.json constraint)
composer update codeigniter4/framework --with-all-dependencies

# Option C: 
composer update codeigniter4/framework

# Verify installed version
composer show codeigniter4/framework

# Optional: update all project dependencies (if you want everything up-to-date)
composer update
```

## Post-upgrade checklist

- Run your test suite and manual smoke tests.
- Search for uses of deprecated/changed APIs (e.g., `regex_match` placeholder syntax, `Entity::setAttributes()`, encryption `$params` behavior).
- If your app uses worker mode, review `WorkerMode` config and enable persistent services carefully.
- Merge any upstream comment/document changes if you maintain custom versions of the listed config files.

---

If you want, I can also:
- produce a diff patch for each file listing upstream vs. your file contents,
- run `composer update` here (if allowed), or
- create a git commit with these changes.

File created: `UPGRADE_4.7.md`
