# 🌌 Aurora Framework

A high-performance, SEO-friendly, developer-first WordPress theme built with modular architecture, block editor support, and future-proof customization in mind. Developed by **Kaspar Moon AKA Abu Saeed M Sayem**.

---

## 🌟 Theme Description

Aurora Framework is a modern, minimal, and extensible WordPress theme built for:

- Blog writers
- E-Commerce stores
- Portfolio creators
- Independent contractors

It follows best practices in PHP, WordPress development, accessibility, and customization.

---

## 📝 Change Log

### [1.3.0] – Initial Public Release

#### 🎉 New Features
- Modular theme architecture using PHP includes
- Responsive design using CSS Grid/Flexbox and media queries
- Native Gutenberg (block editor) support with editor styles
- SEO support with editable meta title & description fields
- Estimated Reading Time with ON/OFF toggle via Customizer
- Custom typography controls via Customizer (font size & weight)
- Translation-ready (`.pot`, `.po`, `.mo`), with native text-domain setup
- Built-in language switcher using flag icons — no plugin required
- Auto-detection and activation of page-specific features (FAQ, pricing, etc.)
- WooCommerce compatibility with custom templates (`single-product.php`, `archive-product.php`)
- Custom page templates for:
  - Privacy Policy
  - Terms of Use
- Legal revision log with last 5 post updates (author + timestamp)
- “Last Updated” compliance notice for legal pages
- Dynamic body class toggles per template (e.g., `.privacy-mode`, `.terms-mode`)
- Auto-creation of key pages on theme activation (`Privacy Policy`, `Terms of Use`)
- Automatic check and injection of `define('WP_POST_REVISIONS', true);` into `wp-config.php`
- Admin dashboard notice if `wp-config.php` is not writable
- CSS variables for consistent theming (`--primary-color`, etc.)
- Multiple visual schemes based on body class (e.g., `.blog`, `.ecommerce`, `.contractor`)
- Minification hints via `.htaccess`

#### 🛠 Improvements
- Fully modular Customizer options per template (`/inc/customizer/`)
- Modular template parts under `template-parts/` for reusable UI
- Page layout controls using Flexbox via `.page-layout` and `.sidebar`

#### 📚 Documentation
- Developer documentation in Markdown format for PDF export
- README.md restructured for clarity: Setup, Features, File Structure, and Licensing
- LICENSE.txt using GNU GPL v3 for open use and future monetization

#### 🧪 Internal Code Quality
- All functions wrapped in `function_exists()` to avoid redeclaration
- Modular PHP logic split across purpose-built files (`setup.php`, `scripts.php`, `security.php`)
- Theme hooks (`after_setup_theme`, `template_redirect`, etc.) used cleanly

---

## 🚀 Setup Instructions

1. Clone the repository:

```bash
git clone https://github.com/kasparmoon/Aurora-Framework.git

---

## 📄 License

Aurora Framework is licensed under the [GNU General Public License v3.0](https://www.gnu.org/licenses/gpl-3.0.html).  
You are free to use, modify, and distribute the theme under the terms of this license.

Commercial use is allowed. Future updates may be released under a premium model while remaining GPL-compliant.