<?php
//Template Name: REGULATIONS

get_header();

?>
<style>
   .regulation-1{
       font-size:20px;
   } 
   @media screen and (max-width: 450px) {
       .regulation-1{
       font-size:10px; 
   }
   }
</style>
<div class="gcl-regulation">

	<section>
		<div class="container-flud p-0">
			<a href="#"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid"></a>

		</div>
	</section>
	<section class="my-md-5">
		<div class="container p-md-5 text-white">
		    <div class="row justify-content-center">
		        <div class="col-md-10 regulation-1 " style="font-size:20px">
		            <div class ="privacy"><?php echo get_the_content();?></div
		        </div>
		    </div>
							
					</div>
	</section>
	</div>
				// Footer 
				<?php			get_footer();?>
