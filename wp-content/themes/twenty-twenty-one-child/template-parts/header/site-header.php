<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<div class="container-fluid px-0 bg-dark py-2 d-none">
		<div class="get-tickets">
			<div class="swiper get_tickets_slider">
   			 <div class="swiper-wrapper text-center">
   			 	 <div class="swiper-slide"><a href="#">Get Your Tickets</a></div>
   			 	 <div class="swiper-slide"><a href="#">Get Your Tickets</a></div>
   			 	 <div class="swiper-slide"><a href="#">Get Your Tickets</a></div>
   			 	 <div class="swiper-slide"><a href="#">Get Your Tickets</a></div>
   			 </div>
   			</div>
		</div>
	</div>
<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?> py-0">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>
	<a href="https://www.fide.com/" target="blank" class= "text-decoration-none d-flex justify-content-end"><img src="/wp-content/uploads/2023/05/gcl_logo_3.png" class="img-responsive header_logo_2"></a>

</header><!-- #masthead -->
