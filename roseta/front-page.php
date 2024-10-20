<?php
/**
 * The template for displaying the landing page/blog posts
 * The functions used here can be found in includes/landing-page.php
 *
 * @package Roseta
 */

$roseta_landingpage = cryout_get_option( 'theme_landingpage' );

if ( is_page() && ! $roseta_landingpage ) {
	load_template( get_page_template() );
	return true;
}

if ( 'posts' == get_option( 'show_on_front' ) ) {
	include( get_home_template() );
} else {

	get_header();
	?>

	<div id="container" class="roseta-landing-page one-column">
		<main id="main" class="main">
		<?php
		//cryout_before_content_hook();

		if ( $roseta_landingpage ) {
			get_template_part( apply_filters('roseta_landingpage_main_template', 'content/landing-page' ) );
		} else {
			roseta_lpindex();
		}

		//cryout_after_content_hook();
		?>
		</main><!-- #main -->
		<?php if ( ! $roseta_landingpage ) { roseta_get_sidebar(); } ?>
	</div><!-- #container -->

	<?php get_footer();

} //else !posts
