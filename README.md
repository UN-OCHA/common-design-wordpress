# Common Design Wordpress Starter Theme
This Wordpress theme is a starter theme, meaning the customisations should be added directly to the theme's code base.

This theme contains the markup and styles for the Common Design (CD) Header and Footer, and some components for the 
content area.

## Styles
The main CD styles are generated from the [Drupal theme](https://github.com/UN-OCHA/common_design) and copied to
`cd.css`. There are also `normalize.css` and `hidden.module.css` which provide style resets, and rules for hiding
elements in different ways, respectively. See [https://web.brand.unocha.org](https://web.brand.unocha.org) for the Drupal demo.

Any rules to adjust the core `cd.css` styles for Wordpress are placed in `cd-overrides.css`.

Rules specific to the implementation, like changing the OCHA brand blue, should be added to `styles.css`.

## Page layouts
There are multiple page templates
- **Default template** (full width, to be used with Gutenberg blocks in the content area)
- **Landing Page** (full width with Feature image as hero)
- **Sidebar First** (sidebar widget displays first, followed by content area)
- **Sidebar Second** (sidebar widget displays second, preceded by content area)
- **Sidebar Both** (both sidebars are present and content area is narrow)

For the sidebar layouts, the blocks placed in `wp-admin/widgets.php` sidebars widgets will appear on all pages using the
sidebar page templates.

The default layout uses `index.php` template. This is a full width layout suitable for blocks in the content area.

The Landing page layout displays the Feature image using the `cd-hero` component. This template should be customised to suit.

There is also a `front-page.php` file which is used automatically when the homepage setting is set to display a static page. Any customisation to the markup for the homepage should be done in this file. Currently, the Page Title is set to be visual hidden on the homepage.

## Article templates
Post and pages can be displayed as teasers or full pages, depending on the context. The teasers display the Featured image as a thumbnail. The full page doesn't display the Featured image. This can be added in the content as a Gutenberg block.

## Page Assembly
We recommend installing Gutenberg to avail of the content blocks for creating interesting content pages. To reduce the complexity many Gutenberg blocks are not available. Look for `function common_design_allowed_block_types` in `functions.php`

To adhere to the Common Design, the Gutenberg block style settings are disabled, and CD styles are applied to the Gutenberg blocks.

## Editor styles
There is a stylesheet `style-editor.css` which contains duplicate rules with some adjustments to the selectors, for the Gutenberg blocks and CD components and some rules from `cd.css` to ensure the Content Editors see the styles as they will appear on published pages, while editing content.

## Installation
WordPress themes live in the `wp-content/themes` folder. Upload the theme as a zip via the Wordpress UI and activate.

### Credits
The Boilerplate theme is modified from [Tonik Wordpress Boilerplate](//github.com/tonik/wordpress-theme-boilerplate/release) project. This boilerplate follows a [WordPress minimal requirements](https://wordpress.org/about/requirements/).

