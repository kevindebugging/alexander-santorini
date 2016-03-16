<?php
/**
 * Theme: Flat Bootstrap
 *
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package flat-bootstrap
 */
?>
	</div><!-- #content -->

	<?php // Page bottom (before footer) widget area
	//get_sidebar( 'pagebottom' );
	?>

	<?php // Start the footer area ?>
	<footer id="colophon" class="site-footer" role="contentinfo">

	<?php // Footer "sidebar" widget area (1 to 4 columns supported)
	get_sidebar( 'footer' );
	?>

	<?php // Check for site credits (can be overriden in a child theme)
	$theme = wp_get_theme();
	$site_credits = sprintf( __( '<span class="credits-copyright">&copy; %1$s %2$s. </span><span class="credits-theme">Theme by %3$s.</span>', 'flat-bootstrap' ),
		date ( 'Y' ),
		'<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>',
		'<a href="' . $theme->get( 'ThemeURI' ) . '" rel="profile" target="_blank">' . $theme->get( 'Author' ) . '</a>'
	);
	$site_credits = apply_filters( 'xsbf_credits', $site_credits );
 	?>

	<?php // If either footer nav or site credits, display them
	if ( $nav_menu OR $site_credits ) : ?>
	<div class="after-footer">
	<div class="container">

		<?php // Footer nav menu
		if ( $nav_menu ) : ?>
			<div class="footer-nav-menu pull-left">
			<nav id="footer-navigation" class="secondary-navigation" role="navigation">
				<h1 class="menu-toggle sr-only"><?php _e( 'Footer Menu', 'flat-bootstrap' ); ?></h1>
				<?php echo $nav_menu; ?>
			</nav>
			</div><!-- .footer-nav-menu -->
		<?php endif; ?>

	<div class="social-connect">
		<p>Connect with Us</p>
		<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
		<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
		<a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a>
		<a href="https://www.pinterest.com" target="_blank"><i class="fa fa-pinterest-square fa-2x"></i></a>
		<a href="http://www.houzz.com.au/pro/alexandersantorini/alexander-santorini-imports" target="_blank">
			<img src="/wp-content/uploads/2016/03/badge31.png" alt="Renovation and Home Design" width="30" border="0" />
		</a>
	</div>

	</div><!-- .container -->
	</div><!-- .after-footer -->
	<?php endif; ?>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
