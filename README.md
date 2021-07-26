# Common Design Wordpress Starter Theme

This Wordpress theme is a starter theme, meaning the customisations should be added directly to the theme's code base.

This theme contains the markup and styles for the Common Design (CD) Header and Footer, and some components for the 
content area.

The main CD styles are generated from the [Drupal theme](https://github.com/UN-OCHA/common_design) and copied to
`cd.css`. There are also `normalize.css` and `hidden.module.css` which provide style resets, and rules for hiding
elements in different ways, respectively. See [https://web.brand.unocha.org](https://web.brand.unocha.org) for the Drupal demo.

Any rules to adjust the core `cd.css` styles for Wordpress are placed in `cd-overrides.css`.

Rules specific to the implementation should be added to `styles.css`

There is a stylesheet `style-editor.css` which contains duplicate rules for the components and some rules from `cd.css`
to ensure the Content Editors see the styles as they will appear in the frontend, while on the editing forms.

There are multiple page templates
- **Landing page** (full width, to be used with Gutenberg blocks in the content area)
- **Sidebar first** (sidebar widget displays first, followed by content area)
- **Sidebar second** (sidebar widget displays second, preceded by content area)
- **Sidebar both** (both sidebars are present and content area is narrow)

For the sidebar layouts, the blocks placed in `wp-admin/widgets.php` sidebars widgets will appear on all pages using the
sidebar page templates.

### Requirements
This boilerplate follows a [WordPress minimal requirements](https://wordpress.org/about/requirements/).

## Installation
WordPress themes live in the `wp-content/themes` folder. Upload the theme as a zip via the Wordpress UI and activate.

### Credits
The Boilerplate theme was borrowed from [Tonik Wordpress Boilerplate](//github.com/tonik/wordpress-theme-boilerplate/release) project.
