# Config Files Comparison

Comparison between `play/app/Config/` and `play/vendor/codeigniter4/framework/app/Config/`

## Summary

Out of 17 config files compared, **3 files have differences** and **14 files are identical** to the framework defaults.

---

## Files with Differences

### 1. Paths.php - 2 Differences

#### 1a. System Directory Path
| Version | Value |
|---------|-------|
| **App** | `__DIR__ . '/../../vendor/codeigniter4/framework/system'` |
| **Framework** | `__DIR__ . '/../../system'` |

#### 1b. Missing Property
The framework version has an additional property that your app is **missing**:

```php
/**
 * ---------------------------------------------------------------
 * ENVIRONMENT DIRECTORY NAME
 * ---------------------------------------------------------------
 *
 * This variable must contain the name of the directory where
 * the .env file is located.
 * Please consider security implications when changing this
 * value - the directory should not be publicly accessible.
 */
public string $envDirectory = __DIR__ . '/../../';
```

**Impact:** Your app doesn't define where the .env file is located, which might cause issues if the framework expects this property.


### 2. Images.php - 1 Comment Difference

#### Deprecation Comment
| Version | Comment |
|---------|---------|
| **App** | `@deprecated 4.7.0 No longer used. Will be removed in a future release.` |
| **Framework** | `@deprecated 4.7.0 No longer used.` |

**Impact:** Minor - only affects documentation/comments. The actual functionality is identical.

---

### 3. Toolbar.php - 1 Formatting Difference

#### watchedExtensions Array Format
**App Version:**
```php
public array $watchedExtensions = [
    'php',
    'css',
    'js',
    'html',
    'svg',
    'json',
    'env',
];
```

**Framework Version:**
```php
public array $watchedExtensions = [
    'php', 'css', 'js', 'html', 'svg', 'json', 'env',
];
```

**Impact:** None - both are functionally identical, just formatted differently (multi-line vs single-line).

---

## Files with NO Differences

The following 14 config files are **identical** to the framework defaults:

1. ✅ CURLRequest.php
2. ✅ Cache.php
3. ✅ ContentSecurityPolicy.php
4. ✅ Email.php
5. ✅ Encryption.php
6. ✅ Format.php
7. ✅ Hostnames.php
8. ✅ Migrations.php
9. ✅ Optimize.php
10. ✅ Session.php
11. ✅ UserAgents.php
12. ✅ View.php
13. ✅ WorkerMode.php
14. ✅ Routing.php

---

## Recommendations

### Critical
- **Consider adding `envDirectory` to Paths.php** if the framework or your application depends on this property.

### Non-Critical
- Images.php comment difference is purely cosmetic.
- Toolbar.php formatting difference has no functional impact.
