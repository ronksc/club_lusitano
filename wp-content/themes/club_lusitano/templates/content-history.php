<section class="history_content">
	<div class="container">
		<div class="row">
			<div class="page_title">
				<?=get_field('heading', $post->ID);?>
			</div>
			
			<div class="history_intro_container">
				<div class="intro_text">
					<?=get_field('text_before_timeline', $post->ID);?>
				</div>
				<div class="history_timeline clearfix">
					<?php
					// check if the repeater field has rows of data
					if( have_rows('timeline') ):
						$rows_output = 0;
						// loop through the rows of data
						while ( have_rows('timeline') ) : the_row(); 
							
							if ($rows_output % 4 == 0) { 
								echo '<div class="col-sm-6 col-md-12 col-lg-6 timeline_container clearfix">';
							}
							
							if ($rows_output % 2 == 0) { 
								echo '<div class="col-sm-6 timeline_subContainer clearfix">';
							}
						
						?>
							<div class="col-xs-6 timeline_item">
								<?php $image = get_sub_field('timeline_images'); ?>
								<img src="<?php echo $image['url']; ?>" class="img-responsive" />
								<div class="timeline_text_wrapper">
									<div class="timeline_text">
										<span><?php the_sub_field('timeline_year'); ?></span>
										<span><?php the_sub_field('timeline_title'); ?></span>
									</div>
								</div>
								<a href="#timeline_<?=$rows_output?>" class="overlay_link"></a>
							</div>
					<?php
							if ($rows_output % 2 == 1) { 
								echo '</div>';
							}
					
							if ($rows_output % 4 == 3) {
							  echo '</div>';
						    }
						    $rows_output++;
					
						endwhile;
					endif;
					?>
				</div>
			</div>
			
			<?php
			// check if the repeater field has rows of data
			if( have_rows('timeline') ):
				// loop through the rows of data
				$rows_output = 0;
				
				while ( have_rows('timeline') ) : the_row(); ?>
				
				<div class="timeline_content" id="timeline_<?=$rows_output?>">
					
					<div class="page_title">
						<?php the_sub_field('timeline_year'); ?>
						<?php the_sub_field('timeline_title'); ?>
					</div>
					
					<div class="clearfix">
						<div class="col-sm-4 col-sm-push-8 media_content">
							<?php 
								$gallery_arr = get_sub_field('timeline_gallery'); 
								
								foreach($gallery_arr as $gallery_image):
							?>
							<div class="media_item">
								<div class="media_wrapper">
									<img src="<?=$gallery_image['url']?>" class="img-responsive" />
								</div>
								<?php if(!empty($gallery_image['caption'])){ ?>
								<div class="caption"><?=$gallery_image['caption']?></div>
								<?php } ?>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="col-sm-8 col-sm-pull-4 text_content">
							<?php the_sub_field('timeline_content'); ?>
						</div>
					</div>
					
				</div>
			<?php
					$rows_output++;
				endwhile;
			endif;
			?>
		</div>
	</div>	
</section>