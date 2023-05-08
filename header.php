<?php
/**
 * This is the template that displays all of the <head> section and <header> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title> -->
    <?php wp_head(); ?>
    <script>document.documentElement.className = document.addEventListener ? "js" : "no-js";</script>
  </head>
  <body <?php body_class(); ?>>
    <a href="#main-content" class="visually-hidden focusable skip-link">Skip to main content</a>
    <div class="cd-page-layout-container">
      <?php get_template_part( 'resources/templates/parts/parts', 'header' ); ?>



