# 🚀 SagePress: The Ultimate WordPress Boilerplate

[![Node.js Version](https://img.shields.io/badge/node-%3E%3D22.12.0-brightgreen)](https://nodejs.org/)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.3-blue)](https://php.net/)
[![Build Tool: Vite](https://img.shields.io/badge/build-Vite-646CFF)](https://vitejs.dev/)
---

> [!IMPORTANT]
> **DEVELOPER-ONLY TOOL:** This boilerplate is designed strictly for professional WordPress engineers familiar with Sage 10, Acorn, and modern build pipelines. It is not a plug-and-play theme for end-users.

**SagePress Boilerplate** is a premium, **High-Performance WordPress Starter Theme** engineered for speed and search visibility. Built on **Roots Sage 10** and **Acorn 6**, it integrates **Tailwind CSS v4** and **Vite** for the fastest possible development and page load times. This boilerplate is pre-configured for **SEO & GEO-targeting**, featuring mobile-first principles and **Schema.org** JSON-LD structures out-of-the-box.

---

## ✨ Features

- 🏗 **Tailwind CSS v4:** Experience the future of CSS with a CSS-first configuration and ultra-fast performance.
- ⚡ **Vite 6/8 Integration:** Instant HMR (Hot Module Replacement) using the `wordpressPlugin` for seamless WP development.
- 🧱 **Blade Component Architecture:** Modular, reusable UI components including a professional Offcanvas Navigation.
- 📱 **Mobile-First Offcanvas:** A high-end sliding mobile menu with glassmorphism and accessibility (ARIA/ESC) built-in.
- 🎨 **Premium Aesthetics:** Curated typography (Outfit/Inter), smooth transitions, and modern grid layouts.
- 🛠 **Acorn 6 Ready:** Full support for Laravel-style Service Providers, View Composers, and configurations.

---

## 📋 Prerequisites

- **PHP:** >= 8.3
- **Node.js:** >= 22.12.0
- **Composer:** >= 2.0

---

## 🚀 Getting Started

### 1. Installation

```bash
git clone https://github.com/nazmunsakib/sagepress.git wp-content/themes/sagepress
cd wp-content/themes/sagepress
```

### 2. Install Dependencies

Install PHP and JavaScript dependencies (using `--legacy-peer-deps` ensures compatibility with the latest Vite plugins):

```bash
composer install
npm install --legacy-peer-deps
```

### 3. Development

Launch the high-speed Vite dev server:

```bash
npm run dev
```

### 4. Production

Compile and minify assets for deployment:

```bash
npm run build
```

---

## 🛠 Project Structure

```text
sagepress/
├── app/               # Theme logic (Controllers, Filters, setup.php)
├── resources/         # Frontend sources
│   ├── css/app.css    # Tailwind v4 Entry (Theme tokens & Plugins)
│   ├── js/app.js      # Main logic (Offcanvas Nav, HMR)
│   └── views/         # Blade templates
│       ├── components/# Reusable modules (Offcanvas-nav)
│       ├── layouts/   # HTML wrapper & Vite asset loading
│       └── partials/  # Header, Footer, Sidebar
└── vite.config.js     # Optimized config using wordpressPlugin()
```

---

## ⚠️ Troubleshooting & Setup Tips

### 1. PowerShell Execution Policy (Windows)
If `npm` commands fail with a security error, run this in PowerShell as Administrator:
```powershell
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
```

### 2. Tailwind v4 Typography
The boilerplate uses the official typography plugin for single posts. Ensure it is installed:
```bash
npm install @tailwindcss/typography --legacy-peer-deps
```

### 3. Vite Config Exports
If you see an "export not found" error for `roots`, check `vite.config.js`. We use the named export **`wordpressPlugin`** from `@roots/vite-plugin`.

---

## 👤 Author

**Nazmun Sakib**

- Website: [nazmunsakib.com](https://nazmunsakib.com/)
- GitHub: [@nazmunsakib](https://github.com/nazmunsakib)

---

## 📄 License

Distributed under the MIT License. See `LICENSE.md` for more information.

<p align="center">Handcrafted with ❤️ by Nazmun Sakib</p>
