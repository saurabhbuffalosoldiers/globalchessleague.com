<?php
//Template Name: Privacy_Policy

get_header();

?>

<div class="gcl-PrivacyPolicy">

	<section>
		<div class="container-flud p-0">
			<a href="#"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid"></a>

		</div>
	</section>
	<section class="my-md-5">
		<div class="container p-md-5 text-white">
							<div class ="privacy"><?php echo get_field('privacy_policy');?></div>
					</div>
	</section>
				// Footer 
				<?php			get_footer();?>
