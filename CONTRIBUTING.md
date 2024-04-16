# Contributing Guidelines

See the **Audience** metadata for each section.

## Contributing code changes to the Common Design Wordpress theme

| Audience     |
| :----------- |
| Contributors |

Clone the `common-design-wordpress` theme repo and make a pull request against `main` branch for peer review, or open a github [issue](https://github.com/UN-OCHA/common-design-wordpress/issues).

## Syncing the WP Starter with newer versions of CD

| Audience    |
| :---------- |
| Maintainers |

Here is the **minimum** set of files that need to be copied over when updating the WordPress Starterkit to a newer version of CD. It is likely that template changes will need to be copied over as well. There are individual sections below for each file in this table:

| Source                                               | Destination                 |
| :--------------------------------------------------- | :-------------------------- |
| css/brand.css                                        | resources/assets/css/brand.css |
| css/styles.css                                       | resources/assets/css/styles.css |
| X.Y.Z/core/assets/vendor/normalize-css/normalize.css | resources/assets/css/vendor/drupal-normalize.css |
| X.Y.Z/core/modules/system/css/components/hidden.module.css | resources/assets/css/vendor/drupal-hidden.css |
| libraries/[name]                                    | resources/assets/css/[name] |

**Normalize:** You should seek out the latest major version of Drupal listed on the CD and then the latest stable minor/patch release. When these docs were last touched [Drupal core was 10.3.x](https://git.drupalcode.org/project/drupal/-/blob/10.3.x/core/assets/vendor/normalize-css/normalize.css). Sourcing from core is important because the CD is constantly tested against the latest versions of Drupal in an effort to keep up with security releases. As a consequence if normalize gets updated, we will adapt the CD to whatever is in Drupal core.

**Drupal Libraries:** The individual Drupal Libraries should be copied exactly as-is from CD. If a particular CSS file doesn't have a docblock comment, adding one to the top (and opening a PR to CD) is appreciated if we still have any leftover stragglers over time. They used to be in the `components` directory, but it was renamed `libraries` [when we adopted Drupal SDC](https://github.com/UN-OCHA/common_design/releases/tag/v9.3.0).

**CD Overrides:** This file's contents might need to vary quite a bit as the CD evolves. It holds both workarounds specific to WordPress and enhancements to WP-specific tools, such as Gutenberg. Generally you will tweak this file once you start testing the CD upgrade you just did. Things should be well-commented, so if it seems a piece is no longer necessary, be bold and remove it!

**Style Editor:** Another WP-specific file which will also benefit from manual inspection and updates. This file allows the Gutenberg editor to appear much more WYSIWYG, helping authors create well-formatted, good-looking content. For upgrades to CD you SHOULD modify `style-editor.css`. Do NOT modify the companion file `style-editor--site.css` which is for site-specific customizations. It should be left blank for individual websites to use, and should NOT be overwritten when updating a theme.

### Updating CSS/JS

After copying the files into their respective homes, review the contents of the following WP files to make sure they still reflect the file structure:

- `src/styles.php`
- `src/scripts.php`

Additionally, JS files need manual modification when being copied from the Drupal theme. Don't sweat it, the bulk of the file doesn't need to change! With a few simple steps you can use the original Drupal JS files:

  1. Remove the outer closure `(function (Drupal) {` and `})(Drupal);` from the top and bottom of the file respectively.
  2. Modify the Behavior to be a global constant instead of a property inside the `Drupal.behaviors` object: `const cdDropdown = {`
  3. Create a new IIFE at the bottom of the file with the modified behavior's `attach` so that it runs when the file is parsed: `(function iife() {cdDropdown.attach();}());`

Compare two existing files for a full example:

- Drupal original: `/resources/assets/css/cd-dropdown/cd-dropdown.js`
- Modified for WP: `/resources/assets/js/cd-dropdown.js`
