# UN OCHA Common Design: Wordpress Starter Theme

This Wordpress theme is a starter theme, meaning the customisations should be added directly to the theme's code base. This theme contains the markup and styles for the Common Design (CD) Header and Footer, and some components for the content area.

See [https://web.brand.unocha.org][web-brand] for the Drupal-based Common Design reference website. When in doubt, this URL is the definitive example.

  [web-brand]: https://web.brand.unocha.org


## Modifying CSS

The main CD styles plus the base-theme's `brand.css` are sourced from the [Drupal theme](https://github.com/UN-OCHA/common_design). We've done our best to enqueue the files in the same order as Drupal, even though the two systems work totally differently. See `src/styles.php` for more details.

⛔ **Do NOT use `style.css` as is customary for basic WP themes.** The file is retained so that the theme appears correctly in the admin UI, but should otherwise be left alone. Any WordPress-specific adjustments are in `cd-overrides.css`, including styles for Gutenberg blocks.

✅ **DO modify `resources/assets/css/styles.css` for site-specific styles.** This file contains the basic overrides to re-color the website and adjust logo size. Add your own CSS Variables inside the existing `:root`, and any other selectors can follow after it.


## Page layouts

There are multiple page templates:

- **Default template** (full width, to be used with Gutenberg blocks in the content area)
- **Landing Page** (full width with Feature image and Page title as a hero component)
- **Sidebar First** (sidebar widget displays first, followed by content area)
- **Sidebar Second** (sidebar widget displays second, preceded by content area)
- **Sidebar Both** (both sidebars are present and content area is narrow)

For the sidebar layouts, the blocks placed in `wp-admin/widgets.php` sidebars widgets will appear on all pages using the sidebar page templates.

The default layout uses `index.php` template. This is a full width layout suitable for blocks in the content area.

The Landing page layout displays the Feature image using the `cd-hero` component. This template should be customised to suit.

There is also a `front-page.php` file which is used automatically when the homepage is set to display a static page or the latest posts. Any customisation to the markup for the homepage should be done in this file. Currently, the Page Title is set to be visually hidden on the homepage.


## Article templates

Pages and posts can be displayed as teasers or full pages, depending on the context. The teasers display the Featured image as a thumbnail and the full page displays the Featured image as a banner image following the page title, unless the page or post is set as the homepage, when the page title is visually hidden.


## Image styles

For the Hero, Banner and Thumbnail images, dimensions and crop options are set in `src/thumbnails.php` and can be adjusted as needed.


## Page Assembly

We recommend using [Gutenberg][gutenberg] (built-in to WordPress 5.0+) to avail of the content blocks for creating interesting content pages. To reduce the complexity many Gutenberg blocks are not available. Look for `function common_design_allowed_block_types` in `src/gutenberg.php` for a list of currently allowed blocks, and adjust accordingly.

To adhere to the Common Design, many Gutenberg block style settings are disabled, and CD styles are applied to the Gutenberg blocks. Refer to `cd-overrides.css`.

  [gutenberg]: https://wordpress.org/gutenberg/


## Editor styles

There is a stylesheet `style-editor.css` which contains duplicate rules with some adjustments to the selectors, for the Gutenberg blocks and CD components and `brand.css` to ensure the Content Editors see the styles as they will appear on published pages, while editing content.

⛔ **Do NOT edit `style-editor.css`** because the file contents will be replaced during CD upgrades.

✅ **DO edit `style-editor--site.css`** for site-specific Gutenberg editor styles. It won't be overwritten.


## Common Header / Footer optional elements

The Common Design Header and Footer contain some elements that may not be relevant to everyone. For ease, we have set defaults and/or removed elements. If desired, these can be included and customized. When appropriate you will find commented include statements that can be uncommented to begin using them.


### Mobile logo

There are 2 different logo files used depending on viewport size. The logo that displays on wider screens can be set via the WordPress admin UI, but the mobile logo is set as a background image in CSS. If this image is not replaced, the [default OCHA logo][ocha-logo-wp] is used.

To replace the default mobile logo with a custom logo:

1. Add the SVG mobile logo file to `resources/assets/img/logos/`.
2. Uncomment and change the file name in `resources/assets/css/styles.css` for the `.cd-site-logo` rule.

  [ocha-logo-wp]: https://github.com/UN-OCHA/common-design-wordpress/blob/main/resources/assets/images/logos/ocha-logo-blue.svg


### Search

Comment out the include statement in `resources/templates/parts/parts-header.php` if search is not required.


### OCHA Services menu

Uncomment the include statement in `resources/templates/parts/parts-ocha-services.php` to include the first section "Related Platforms". Update the link text and `href` in `resources/templates/parts/parts-related-platforms.php`.


### Social media icons

Uncomment the include statement in `resources/templates/parts/parts-footer.php` to include the social media block. Update the link `href` in `resources/templates/parts/parts-social-media.php`.

Comment out or delete the markup for the icons that are not needed.


## Releases

We use [standard-version][standard-version] and [semantic versioning][semantic-version]. Refer to the `package.json` or the github [Releases][cd-wp-releases] page for the latest version. Refer to the `CHANGELOG.md` for release history and large, disruptive changes.

  [standard-version]: https://www.npmjs.com/package/standard-version
  [semantic-version]: https://semver.org/
  [cd-wp-releases]: https://github.com/UN-OCHA/common-design-wordpress/releases


## Linting

This project uses some stylelint for CSS linting and the configuration is copied from Drupal 10 core `.stylelintrc.core.json` and a few adjustments are made inside `.stylelintrc.json`.

- Run `nvm use` to use the correct Node version.
- Run `npm i` to install the Node packages.
- Run `npm run css:lint` to see the linting errors.
- Run `npm run css:lint-fix` to automatically fix the errors.


## Installation

WordPress themes live in the `wp-content/themes` folder. Upload the theme as a zip via the Wordpress UI and activate.


### Credits

The Boilerplate theme is modified from [Tonik Wordpress Boilerplate][tonik]
project. This boilerplate follows a [WordPress minimal requirements][wp-min-reqs].

  [tonik]: https://github.com/tonik/wordpress-theme-boilerplate/release
  [wp-min-reqs]: https://wordpress.org/about/requirements/
