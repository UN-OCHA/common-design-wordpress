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

Here is the **minimum** set of files that need to be copied over when updating the WordPress Starterkit to a newer version of CD. There are individual sections below for each file in this table:

| Source                                               | Destination                 |
| :--------------------------------------------------- | :-------------------------- |
| css/brand.css                                        | resources/assets/css/brand.css |
| css/styles.css                                       | resources/assets/css/styles.css |
| X.Y.Z/core/assets/vendor/normalize-css/normalize.css | resources/assets/css/vendor/drupal-normalize.css |
| X.Y.Z/core/modules/system/css/components/hidden.module.css | resources/assets/css/vendor/drupal-hidden.css |
| components/[name]                                    | resources/assets/css/[name] |

**Normalize:** You should seek out the latest major version of Drupal listed on the CD and then the latest stable minor/patch release. When these docs were first written [that was 9.4.x](https://api.drupal.org/api/drupal/core%21assets%21vendor%21normalize-css%21normalize.css/9.4.x). Sourcing from core is important because the CD is constantly tested against the latest versions of Drupal in an effort to keep up with security releases. As a consequence if normalize gets updated, we will adapt the CD to whatever is in Drupal core.

**Components:** The individual components should be copied exactly as-is from CD. If a particular CSS file doesn't have a docblock comment, adding one to the top (and opening a PR to CD) is appreciated if we still have any leftover stragglers over time.

**CD Overrides:** This file's contents might need to vary quite a bit as the CD evolves. It holds both workarounds specific to WordPress and enhancements to WP-specific tools, such as Gutenberg. Generally you will tweak this file once you start testing the CD upgrade you just did. Things should be well-commented, so if it seems a piece is no longer necessary, be bold and remove it!

**Style Editor:** Another WP-specific file which will also benefit from manual inspection and updates. This file allows the Gutenberg editor to appear much more WYSIWYG, helping authors create well-formatted, good-looking content. For upgrades to CD you SHOULD modify `style-editor.css`. Do NOT modify the companion file `style-editor--site.css` which is for site-specific customizations. It should be left blank for individual websites to use, and should NOT be overwritten when updating a theme.
