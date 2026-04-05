# SagePress — WordPress Starter Theme Built on Sage 10, Tailwind CSS v4 & Laravel Blade

**SagePress** is a free, open-source WordPress starter theme boilerplate for developers. Built on [Roots Sage 10](https://roots.io/sage/), it combines Laravel Blade templating, Tailwind CSS v4, and Vite into a clean, modern, and performance-focused WordPress theme development workflow — with zero bloat.

> Perfect for developers building WordPress blogs, business websites, portfolios, and WooCommerce stores who want a professional, maintainable codebase.

---

<p align="center">
  <a href="https://github.com/nazmunsakib/SagePress"><img alt="SagePress" src="https://cdn.roots.io/app/uploads/logo-sage.svg" height="100"></a>
</p>

<p align="center">
  <a href="https://packagist.org/packages/nazmunsakib/sagepress"><img alt="Packagist Installs" src="https://img.shields.io/packagist/dt/nazmunsakib/sagepress?label=projects%20created&colorB=2b3072&colorA=525ddc&style=flat-square"></a>
  <a href="https://github.com/nazmunsakib/SagePress/actions"><img alt="Build Status" src="https://img.shields.io/github/actions/workflow/status/nazmunsakib/SagePress/main.yml?branch=main&logo=github&label=CI&style=flat-square"></a>
  <a href="https://twitter.com/nazmunsakib"><img alt="Follow Nazmun Sakib" src="https://img.shields.io/badge/follow%20@nazmunsakib-1da1f2?logo=twitter&logoColor=ffffff&style=flat-square"></a>
  <a href="https://github.com/sponsors/nazmunsakib"><img src="https://img.shields.io/badge/sponsor%20sagepress-525ddc?logo=github&style=flat-square&logoColor=ffffff" alt="Sponsor SagePress"></a>
</p>

---

## ✨ Features

- 🔧 Clean, efficient theme templating with Laravel Blade
- ⚡️ Lightning-fast front-end workflow powered by Vite with HMR
- 🎨 Out of the box support for Tailwind CSS v4
- 🚀 Harness the power of Laravel with [Acorn 6 integration](https://github.com/roots/acorn)
- 📦 Block editor (Gutenberg) support built-in
- 🌍 Translation ready with full i18n support
- ♿ Accessible — ARIA roles, skip links, keyboard navigation
- 🔍 SEO ready — semantic HTML5, schema-friendly structure
- 🚫 No jQuery — modern vanilla JS only
- 🔧 PSR-4 autoloading, service providers, view composers

---

## 🛠️ Requirements

| Requirement | Version |
|---|---|
| WordPress | 6.6 or higher |
| PHP | 8.3 or higher |
| Node.js | 20.19.0 or 22.12.0+ |
| Composer | 2.0 or higher |
| Roots Acorn | 6.0 |

---

## 🚀 Quick Start

### Step 1 — Install the Theme

```bash
cd wp-content/themes/
git clone https://github.com/nazmunsakib/SagePress.git sagepress
cd sagepress
```

### Step 2 — Install PHP Dependencies

```bash
composer install
```

### Step 3 — Install Node Dependencies

```bash
npm install
```

### Step 4 — Configure Environment

Update the `APP_URL` in `vite.config.js` to match your local development URL:

```js
if (! process.env.APP_URL) {
  process.env.APP_URL = 'http://your-local-site.test'; // 👈 Change this
}
```

### Step 5 — Build Assets

```bash
# Production
npm run build

# Development with hot reloading
npm run dev
```

### Step 6 — Activate the Theme

Go to **WordPress Admin → Appearance → Themes** and activate **SagePress**.

---

## 📁 Project Structure

```
themes/sagepress/
├── app/                        # → Theme PHP (business logic)
│   ├── Providers/              # → Service providers
│   ├── View/                   # → View composers & models
│   │   └── Composers/
│   ├── filters.php             # → WordPress filter hooks
│   └── setup.php               # → Theme setup (menus, sidebars, supports)
├── public/                     # → Built assets (auto-generated, do not edit)
│   └── build/
│       └── manifest.json
├── resources/                  # → Source files (edit these)
│   ├── css/
│   │   ├── app.css             # → Main stylesheet entry
│   │   └── editor.css          # → Block editor styles
│   ├── js/
│   │   ├── app.js              # → Main JS entry
│   │   └── editor.js           # → Block editor JS
│   ├── fonts/                  # → Custom fonts
│   ├── images/                 # → Theme images
│   └── views/                  # → Blade templates
│       ├── components/         # → Reusable UI components
│       ├── forms/              # → Form templates
│       ├── layouts/            # → Base layout wrappers
│       │   └── app.blade.php
│       └── partials/           # → Header, footer, sidebar, etc.
├── vendor/                     # → Composer packages (do not edit)
├── node_modules/               # → Node packages (do not edit)
├── composer.json               # → PHP dependencies & autoloading
├── package.json                # → Node dependencies & scripts
├── functions.php               # → Theme bootloader
├── index.php                   # → Theme entry point
├── style.css                   # → Theme metadata
└── vite.config.js              # → Vite bundler config
```

---

## 🧩 Available Templates

| Template | File | Description |
|---|---|---|
| Base Layout | `layouts/app.blade.php` | Main HTML wrapper |
| Header | `partials/header.blade.php` | Site header & navigation |
| Footer | `partials/footer.blade.php` | Site footer |
| Sidebar | `partials/sidebar.blade.php` | Widget sidebar |
| Navigation | `partials/navigation.blade.php` | Post pagination |
| Blog Index | `index.blade.php` | Posts listing page |
| Single Post | `single.blade.php` | Individual blog post |
| Default Page | `page.blade.php` | Static page template |
| Archive | `archive.blade.php` | Category / tag / date archive |
| Search | `search.blade.php` | Search results page |
| 404 | `404.blade.php` | Not found page |

---

## 🎨 Customization

### Tailwind CSS v4

Customize your design tokens in `resources/css/app.css`:

```css
@import "tailwindcss";

@theme {
  --color-primary: #2563eb;
  --font-sans: 'Inter', system-ui, sans-serif;
}
```

### Registering Navigation Menus

In `app/setup.php`:

```php
register_nav_menus([
    'primary' => __('Primary Navigation', 'sagepress'),
    'footer'  => __('Footer Navigation', 'sagepress'),
]);
```

### Registering Sidebars

```php
register_sidebar([
    'name' => __('Primary Sidebar', 'sagepress'),
    'id'   => 'sidebar-primary',
]);
```

### Adding View Composers

```php
<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class MyComposer extends Composer
{
    protected static $views = ['partials.my-partial'];

    public function with(): array
    {
        return [
            'data' => $this->getData(),
        ];
    }
}
```

---

## 📦 NPM Scripts

| Command | Description |
|---|---|
| `npm run dev` | Start Vite dev server with HMR |
| `npm run build` | Build assets for production |
| `npm run translate` | Generate & update translation files |
| `npm run translate:pot` | Generate `.pot` translation template |
| `npm run translate:compile` | Compile `.po` files to `.mo` and `.json` |

---

## 🐛 Troubleshooting

### `Vite manifest not found` Error

Assets haven't been built yet. Run:
```bash
npm run build
```

### `composer install` Fails

Make sure PHP 8.3+ and Composer 2.x are installed:
```bash
php -v && composer -V
```

### Cache Issues

Use Local by Flywheel's Site Shell or manually delete:
```
storage/framework/cache/
storage/framework/views/
```

### Node Version Mismatch

SagePress requires Node.js `^20.19.0` or `>=22.12.0`:
```bash
node -v
```
Use [nvm](https://github.com/nvm-sh/nvm) to switch versions if needed.

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

1. Fork the repository
2. Create your feature branch: `git checkout -b feature/my-feature`
3. Commit your changes: `git commit -m 'Add my feature'`
4. Push to the branch: `git push origin feature/my-feature`
5. Open a Pull Request

---

## Community

Keep track of development and community news.

- Follow [@nazmunsakib on Twitter](https://twitter.com/nazmunsakib)
- Visit [nazmunsakib.com](https://nazmunsakib.com) for articles and updates
- Join us on [Roots Discourse](https://discourse.roots.io/) for Sage-related discussions
- Report bugs or request features via [GitHub Issues](https://github.com/nazmunsakib/SagePress/issues)

---

## 🙏 Credits

SagePress is built on top of these amazing open source projects:

- [Roots Sage](https://roots.io/sage/) — The original WordPress starter theme
- [Roots Acorn](https://roots.io/acorn/) — Laravel for WordPress
- [Tailwind CSS](https://tailwindcss.com/) — Utility-first CSS framework
- [Vite](https://vitejs.dev/) — Next generation frontend tooling
- [Laravel Blade](https://laravel.com/docs/blade) — Elegant PHP templating

---

## 📄 License

Licensed under the **MIT License** — see the [LICENSE](LICENSE) file for details.
Free to use in personal and commercial projects.

---

<p align="center">
  Made with ❤️ by <a href="https://nazmunsakib.com">Nazmun Sakib</a>
</p>