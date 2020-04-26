<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package app-theme
 * @subpackage app-theme
 *
 */

get_header(); ?>

    <div id="primary" class="site-content entry-content">
        <div id="content" role="main">

            <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="http://localhost:8080/wordpress/wp-content/uploads/2020/04/undraw_in_real_life_v8fk.svg" alt="" class="wp-image-51"></figure><div class="wp-block-media-text__content">
                    <h1>The mobile application for your health</h1>



                    <p>Welcome to Healthy  app, a customized app for planning and leading a healthy life, created by a group of doctors, trainers and nutritionists </p>

                </div></div>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>