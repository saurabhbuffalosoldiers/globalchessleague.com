<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php //get_template_part( 'template-parts/footer/footer-widgets' );
	?> 
	<div class="container-fluid main-footer" style="background-image: url('/wp-content/uploads/2023/03/footer_bg_image.png'); background-repeat: no-repeat; background-size: cover; background-position: bottom center;">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-5 p-0 p-md-3">
					<div class="site-name">
						<?php if ( has_custom_logo() ) : ?>
							<div class="site-logo m-1"><span class="custom-logo-link"><img src="/wp-content/uploads/2023/02/footer_logo_1.png" class="img-fluid" style="width:30%"></span></div>
						<?php else : ?>
							<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
								<?php if ( is_front_page() && ! is_paged() ) : ?>
									<?php bloginfo( 'name' ); ?>
								<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
						<p>&copy; <?php echo date('Y') ?>, Global Chess League. All Rights Reserved.</p>
					</div><!-- .site-name -->
				</div>
				<div class="col-12 col-md-5 col-lg-2  p-0 p-md-3">
					<nav aria-label="<?php esc_attr_e( 'Footer Menu 1', 'twentytwentyone' ); ?>" class="main-footer-navigation">
				<ul class="main-footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'menu' => 'footer-menu-1',
							'theme_location' => '__no_such_location',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
				</div>
				<div class="col-12 col-md-4 col-lg-2  p-0 p-md-3 d-none">
					<nav aria-label="<?php esc_attr_e( 'Footer Menu 2', 'twentytwentyone' ); ?>" class="main-footer-navigation">
				<ul class="main-footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'menu' => 'footer-menu-2',
							'theme_location' => '__no_such_location',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
				</div>
				<div class="col-lg-5 text-center text-lg-end px-4 mt-4 mt-lg-0">
					<p>An Official Event By</p>
					<a href="https://www.fide.com/" target="blank" class= "text-decoration-none"><img src="/wp-content/uploads/2023/02/gcl_logo_2.png" class="img-responsive footer_logo_2"></a>
					<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>">
				<ul class="footer-navigation-wrapper d-none">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
					</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
			<?php endif; ?>
				</div>
			</div>
		</div>



	<footer id="colophon" class="site-footer d-none">
		<div class="site-info">
			

			<?php
			// if ( function_exists( 'the_privacy_policy_link' ) ) {
			// 	the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			// }
			?>

			<div class="powered-by">
				
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper footer_social_link">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- custom script  -->
<link rel="stylesheet" type="text/javascript" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap_5_2_3/js/bootstrap.bundle.min.js">

<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js" integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts.js"></script>

</body>
</html>
