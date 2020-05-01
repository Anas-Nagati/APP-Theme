<?php
/**
 *
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package app_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'app-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php

			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$app_theme_description = get_bloginfo( 'description', 'display' );
			if ( $app_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $app_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
        <div class="before-nav">
        <nav class="navbar navbar-expand-md navbar-light fixed-top ">

                <?php the_custom_logo(); ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu([
                'menu'            => 'primary',
                'theme_location'  => 'menu-1',
                'container'       => 'div',
                'container_id'    => 'navbarCollapse',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav mr-auto',
                'depth'           => 0,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
            ]);

            ?>
<script>
    $ = jQuery;
    $(function() {
        //caches a jQuery object containing the header element
        var header = $(".header-widget");
        window.onscroll = function() {
            var doc = document.documentElement;
            var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
            if(top >= 99) {
                jQuery(".before-nav").css('background-color', '#1f2d41');
                $('.navbar').addClass('navbar-dark');
            }
            else {
                jQuery(".before-nav").css('background-color', 'transparent');
                $('.navbar').removeClass('navbar-dark');
            }
        }
    });
</script>

        </nav></div>

    </header><!-- #masthead -->
