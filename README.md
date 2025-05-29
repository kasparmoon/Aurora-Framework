/**
 * Translation Instructions:
 *
 * - All strings are wrapped with __('Text', 'auroraframework') or _e().
 * - Use WP CLI to generate .pot: wp i18n make-pot . languages/auroraframework.pot
 * - Translations are stored in /languages/ folder.
 * - You can use Poedit or Loco Translate plugin for GUI translation.
 * - Sample .po/.mo files for Spanish and German are included.
 */

## 🛠️ Theme Setup and Error Fix Summary

This version of the Aurora Framework has resolved critical PHP issues caused by duplicate function declarations (`aurora_theme_setup()` and `aurora_enqueue_assets()`). Functions have now been modularized correctly and wrapped in `function_exists()` to prevent future redeclaration errors.

### ✅ Fixed:
- `aurora_theme_setup()` is now defined only in `inc/setup.php`
- `aurora_enqueue_assets()` is now defined only in `inc/scripts.php`
- All modular files are safely included via `functions.php`
- Error-safe coding practices like `function_exists()` are used
- The theme is now safe to activate and fully functional

This commit ensures clean code architecture and prepares the framework for Gutenberg customization and language switcher integration.
