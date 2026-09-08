# EloquentLens: Query Optimizer & N+1 Detector

[![GitHub License](https://img.shields.io/github/license/smit-backend/eloquent-lens?style=flat-square)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/smit-backend/eloquent-lens?style=flat-square)](https://github.com/smit-backend/eloquent-lens/stargazers)
[![GitHub Issues](https://img.shields.io/github/issues/smit-backend/eloquent-lens?style=flat-square)](https://github.com/smit-backend/eloquent-lens/issues)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat-square&logo=php)](https://php.net)

> **Deep query analyzer for Laravel Eloquent models. Detects N+1 loops, memory spikes, and outputs actionable query logs.**

---

## 🚀 Key Highlights & Features

- **Production-Ready Architecture:** Designed specifically with clean, decoupled architecture.
- **Enterprise Resiliency:** Built-in safeguards, structured error reporting, and observability.
- **Zero-Friction Setup:** Configurable via sensible defaults or deep environment customization.
- **Strictly Typed:** Complete type declarations compatible with PHP 8.2+ and modern standards.

---

## 🛠️ Architecture & Flow

```mermaid
graph TD
    Client[Incoming Request / Event] --> Gate[Input Validator & Security Guard]
    Gate --> CoreEngine[EloquentLens: Query Optimizer & N+1 Detector]
    CoreEngine --> Adapter[External Storage / Cloud / DB]
    CoreEngine --> Observer[Metrics & Audit Logger]
```

---

## 📦 Installation & Setup

### Requirements
- **PHP:** `^8.2`
- **Composer:** Modern Composer v2+

### Installation via Composer
```bash
composer require smit-backend/eloquent-lens
```

---

## ⚙️ Configuration & Quick Start

Publish configuration and default assets:
```bash
php artisan vendor:publish --tag="eloquent-lens-config"
```

Sample configuration excerpt (`config/eloquent-lens.php`):
```php
return [
    'enabled' => env('ELOQUENT_LENS_ENABLED', true),
    'log_channel' => env('ELOQUENT_LENS_LOG', 'stack'),
];
```

---

## 🧪 Testing

Run test suites locally:
```bash
composer test
```

---

## 🛡️ Security & Contributing

If you discover any security-related issues, please open an issue or email directly via GitHub. Contributions via pull requests are always welcome!

---

## 📄 License

This package is open-sourced software licensed under the [MIT License](LICENSE).

Developed and maintained with ❤️ by **[smit-backend](https://github.com/smit-backend)**.
