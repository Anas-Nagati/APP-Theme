<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package app_theme
 */

?>
<div id="footer-sidebar" class="secondary">
    <div id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
        }
        ?>
    </div>
    <div class="footer-menus">
    <div id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
            dynamic_sidebar('footer-sidebar-2');
        }
        ?>
    </div>
    <div id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
            dynamic_sidebar('footer-sidebar-3');
        }
        ?>
    </div>
    <div id="footer-sidebar4">
        <?php
        if(is_active_sidebar('footer-sidebar-4')){
            dynamic_sidebar('footer-sidebar-4');
        }
        ?>
    </div>
    <div id="footer-sidebar5">
        <?php
        if(is_active_sidebar('footer-sidebar-5')){
            dynamic_sidebar('footer-sidebar-5');
        }
        ?>
    </div>
    </div>
</div>
<hr>
	<footer id="colophon" class="site-footer entry-content">
		<div class="site-info">
            <p><span class="sep"> App theme | Theme for mobile apps
            &copy; <?php echo date('Y');?> &nbsp;  Developed by <a href="https://github.com/Anas-Nagati">Anas Nagati</a></p></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
