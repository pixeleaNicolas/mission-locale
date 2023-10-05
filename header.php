<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixelea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text visually-hidden" href="#main-content"><?php esc_html_e('Aller au contenu', 'mission-locale'); ?></a>
		<div class="hidden" hiddden>
			<?php get_template_part( 'dist/img/sprite.svg' ); ?>
		</div>
		
		<header id="masthead" class="header-main" role="banner">
			<div class="header-main__container">
					<?php $custom_logo_id = get_theme_mod('custom_logo'); 
					if ( isset($custom_logo_id) ) {
						 echo wp_get_attachment_image(  $custom_logo_id, "large", false, array("class" => "header-main__logo") ); 
					}
					?>
				<?php get_template_part( 'template-parts/navigation/primary' ); ?>
		</header><!-- #masthead -->

		<main id="main-content" role="main">