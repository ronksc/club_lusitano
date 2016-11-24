<section class="contact_content_container">
	<div class="container">
		<div class="row">
			<div class="page_title">Contact us</div>
			<div class="clearfix contact_content_wrapper">
				<div class="col-sm-5 col-sm-push-7 map_container">
					<!--<img src="<?=get_stylesheet_directory_uri()?>/assets/img/contacts/img_map_dummy.jpg" class="img-responsive" />-->
					<?php 
					$location = get_field('map');
					
					if( !empty($location) ):
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
					<?php endif; ?>
				</div>
				
				<div class="col-sm-7 col-sm-pull-5 contact_content">
					<div class="greetings">
						<!--We’d love to hear from you.-->
						<?php the_content() ?>
					</div>
					
					<?php
					// check if the repeater field has rows of data
					if( have_rows('contact_information') ):
						// loop through the rows of data
						while ( have_rows('contact_information') ) : the_row(); ?>
						<div class="information_group">
							<?php the_sub_field('group_name'); ?>
							
							<?php the_sub_field('group_content'); ?>
						</div>
					<?php
						endwhile;
					endif;
					?>
				</div>
			</div>			
		</div>
	</div>	
</section>

<script src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyCpGcV1lNRwqsSS3ixl-VK9pKCgME_kEaI"></script>