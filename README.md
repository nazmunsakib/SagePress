# 🚀 SagePress: The Ultimate WordPress Starter Theme

[![Node.js Version](https://img.shields.io/badge/node-%3E%3D22.12.0-brightgreen)](https://nodejs.org/)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.3-blue)](https://php.net/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Build Tool: Vite](https://img.shields.io/badge/build-Vite-646CFF)](https://vitejs.dev/)
[![Styling: Tailwind CSS 4](https://img.shields.io/badge/CSS-Tailwind%204-38B2AC)](https://tailwindcss.com/)

**SagePress** is a modern, high-performance WordPress starter theme built for developers who demand a professional workflow. Taking the power of **Roots Sage**, it integrates the latest technologies including **Tailwind CSS 4**, **Vite**, and **Laravel Blade** to provide a component-based development experience inside WordPress.

---

## ✨ Features

- 🏗 **Laravel Blade Templating:** Clean, dry, and efficient theme files using Blade.
- ⚡ **Vite-Powered Workflow:** Instant HMR (Hot Module Replacement) and ultra-fast builds.
- 🎨 **Tailwind CSS v4:** Experience the future of CSS with built-in support for Tailwind's latest engine.
- 🧱 **Component-Driven:** Easily build reusable UI components.
- 🛠 **Acorn 6 Integration:** Bringing Laravel's robust features (Service Providers, Config, etc.) to WordPress.
- 📱 **Mobile-First & SEO Ready:** Optimized for performance and search engine visibility out of the box.

---

## 📋 Prerequisites

Ensure you have the following installed before getting started:

- **PHP:** >= 8.3
- **Node.js:** >= 22.12.0
- **Composer:** >= 2.0
- **WP-CLI:** Optional but recommended

---

## 🚀 Getting Started

### 1. Installation

Clone the repository into your WordPress themes directory:

```bash
git clone https://github.com/nazmunsakib/sagepress.git wp-content/themes/sagepress
cd wp-content/themes/sagepress
```

### 2. Install Dependencies

Install PHP and JavaScript dependencies:

```bash
composer install
npm install
```

### 3. Build Assets

For local development with HMR:

```bash
npm run dev
```

To build production-ready assets:

```bash
npm run build
```

---

## 🛠 Project Structure

```text
sagepress/
├── app/               # Theme logic (Controllers, Providers, Filters)
├── public/            # Compiled assets (Vite output)
├── resources/         # Frontend sources
│   ├── css/           # Tailwind CSS files
│   ├── js/            # JavaScript files
│   └── views/         # Blade templates
├── vite.config.js     # Vite configuration
└── tailwind.config.js # Tailwind CSS configuration
```

---

## 📖 Key Commands

| Command | Description |
| :--- | :--- |
| `npm run dev` | Starts the Vite development server. |
| `npm run build` | Compiles assets for production. |
| `npm run translate` | Generates POT and updates localization files. |
| `composer update` | Updates PHP packages. |

---

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 👤 Author

**Nazmun Sakib**

- Website: [nazmunsakib.com](https://nazmunsakib.com/)
- GitHub: [@nazmunsakib](https://github.com/nazmunsakib)

---

## 📄 License

Distributed under the MIT License. See `LICENSE.md` for more information.

---

<p align="center">Made with ❤️ for the WordPress community</p>
