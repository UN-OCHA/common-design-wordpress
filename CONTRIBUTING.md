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
| css/brand.css                                        | resources/assets/css/cd.css |
| css/styles.css                                       | resources/assets/css/cd.css |
| X.Y.Z/core/assets/vendor/normalize-css/normalize.css | resources/assets/css/normalize.css |
| components/[name]                                    | resources/assets/css/[name] |

**CD Core:** the `brand`/`styles` files intentionally get merged into ONE file for the WordPress theme. You should put `brand.css` before `styles.css` and maintain the docblock comments with up-to-date URLs that reference the tag of CD that you're using. If the url contains `main` or `develop` that's not specific enough.

**Normalize:** You should seek out the latest major version of Drupal listed on the CD and then the latest stable minor/patch release. When these docs were first written [that was 9.4.x](https://api.drupal.org/api/drupal/core%21assets%21vendor%21normalize-css%21normalize.css/9.4.x). Sourcing from core is important because the CD is constantly tested against the latest versions of Drupal in an effort to keep up with security releases. As a consequence if normalize gets updated, we will adapt the CD to whatever is in Drupal core.

**Components:** The individual components should be copied exactly as-is from CD. If a particular CSS file doesn't have a dockblock comment, adding one to the top (and opening a PR to CD) is appreciated if we still have any leftover stragglers over time.
