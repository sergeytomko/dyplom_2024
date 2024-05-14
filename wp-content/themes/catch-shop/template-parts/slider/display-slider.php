<?php
/**
 * The template used for displaying slider
 *
 * @package Catch_Shop
 */

$enable_slider = get_theme_mod( 'catch_shop_slider_option', 'disabled' );

if ( ! catch_shop_check_section( $enable_slider ) ) {
	return;
}
?>

<div id="feature-slider-section" class="section featured-slider-section content-align-left text-align-right">
	<div class="wrapper section-content-wrapper feature-slider-wrapper">
		<div class="main-slider owl-carousel">
			<?php get_template_part( 'template-parts/slider/post-type-slider' ); ?>
		</div><!-- .main-slider -->
	</div><!-- .wrapper -->
</div><!-- #feature-slider -->

