# Common Design Wordpress Starter Theme
This Wordpress theme is a starter theme, meaning the customisations should be added directly to the theme's code base.

This theme contains the markup and styles for the Common Design (CD) Header and Footer, and some components for the 
content area.

## Styles
The main CD styles are generated from the [Drupal theme](https://github.com/UN-OCHA/common_design) and copied to
`cd.css`. There is also `normalize.css` which provide style resets. 
See [https://web.brand.unocha.org](https://web.brand.unocha.org) for the Drupal demo.

Any rules to adjust the core `cd.css` styles for Wordpress are placed in `cd-overrides.css`, including styles for
Gutenberg blocks.

Rules specific to the implementation, like changing the OCHA brand blue, should be added to `styles.css`.

## Page layouts
There are multiple page templates
- **Default template** (full width, to be used with Gutenberg blocks in the content area)
- **Landing Page** (full width with Feature image and Page title as a hero component)
- **Sidebar First** (sidebar widget displays first, followed by content area)
- **Sidebar Second** (sidebar widget displays second, preceded by content area)
- **Sidebar Both** (both sidebars are present and content area is narrow)

For the sidebar layouts, the blocks placed in `wp-admin/widgets.php` sidebars widgets will appear on all pages using the
sidebar page templates.

The default layout uses `index.php` template. This is a full width layout suitable for blocks in the content area.

The Landing page layout displays the Feature image using the `cd-hero` component. This template should be customised to
suit.

There is also a `front-page.php` file which is used automatically when the homepage is set to display a static
page or the latest posts. Any customisation to the markup for the homepage should be done in this file. Currently, the
Page Title is set to be visually hidden on the homepage.

## Article templates
Pages and posts can be displayed as teasers or full pages, depending on the context. The teasers display the Featured
image as a thumbnail and the full page displays the Featured image as a banner image following the page title, unless
the page or post is set as the homepage, when the page title is visually hidden.

## Image styles
For the Hero, Banner and Thumbnail images, dimensions and crop options are set in `src/thumbnails.php` and can be
adjusted as needed.

## Page Assembly
We recommend installing [the Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) to avail of the content blocks
for creating interesting content pages. To reduce the complexity many Gutenberg blocks are not available. Look for 
`function common_design_allowed_block_types` in `src/gutenberg.php` for a list of currently allowed blocks, and adjust
accordingly.

To adhere to the Common Design, many Gutenberg block style settings are disabled, and CD styles are applied to the
Gutenberg blocks. Refer to `cd-overrides.css`.

## Editor styles
There is a stylesheet `style-editor.css` which contains duplicate rules with some adjustments to the selectors, for the
Gutenberg blocks and CD components and some rules from `cd.css` to ensure the Content Editors see the styles as they
will appear on published pages, while editing content.

## Releases
We use [npm-version](https://docs.npmjs.com/cli/version) and [semantic versioning](https://semver.org/). 
Refer to the `package.json` or the github [Releases](https://github.com/UN-OCHA/common-design-wordpress/releases) page
for the latest version. 

Refer to the `CHANGELOG.md` for update details.

## Linting
This project uses some stylelint for CSS linting and the configuration is copied from Drupal 8 core `.stylelintrc.json`.
- Run `nvm use` to use the correct Node version.
- Run `npm i` to install the Node packages.
- Run `npm run stylelint` to see the linting errors
- Run `npm run stylelint-fix` to automatically fix the errors.

## Installation
WordPress themes live in the `wp-content/themes` folder. Upload the theme as a zip via the Wordpress UI and activate.

### Credits
The Boilerplate theme is modified from [Tonik Wordpress Boilerplate](//github.com/tonik/wordpress-theme-boilerplate/release)
project. This boilerplate follows a [WordPress minimal requirements](https://wordpress.org/about/requirements/).

