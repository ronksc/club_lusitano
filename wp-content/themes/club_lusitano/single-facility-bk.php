<?php
	$details_page_name = get_field('details_page_name', $post->ID);
	$details_page_description = get_field('details_page_description', $post->ID);
	$details_page_gallery = get_field('details_page_gallery', $post->ID);
	
	//print_r($details_page_gallery);
	
	//echo $menu_order;
?>
<section class="facilities_content_section">
	<div class="container">
		<div class="row">
			<div class="facilities_slider">
				<!-- First child need to have text information (hidden in desktop version) -->
				<?php 
				foreach($details_page_gallery as $key => $image){?>
					<div class="slider_item">
						<img src="<?=$image['url']?>" class="img-responsive" />
					<?php
					if($key == 0){?>
						<div class="facilities_content_container visible-xs visible-sm hidden-md hidden-lg">
							<div class="facilities_detail">
								<div class="facilities_title"><?=$details_page_name?></div>
								<div class="facilities_content"><?=$details_page_description?></div>
							</div>
						</div>
					<?php
					}
					?>
					</div>
				<?php
				}
				?>
			</div>
			
			<div class="clearfix facilities_content_container hidden-xs hidden-sm visible-md visible-lg">
				<div class="col-sm-6 col-sm-push-6 col-lg-5 col-lg-push-7 facilities_gallery_container">
					<?php 
					foreach($details_page_gallery as $key => $image){?>
						<a href="javascript:;"><img src="<?=$image['sizes']['facility-thumbnail']?>" /></a>
					<?php } ?>
				</div>
				<div class="col-sm-6 col-sm-pull-6 col-lg-7 col-lg-pull-5 facilities_detail">
					<div class="facilities_title">
						<?=$details_page_name?>	
					</div>
					<div class="facilities_content">
						<?=$details_page_description?>
					</div>
				</div>
			</div>
			<div class="clearfix nav_container">
			<?php
				$prev = get_previous_post();
				$next = get_next_post();
			?>
			
			<?php if($prev) : ?>
				<a href="<?=get_permalink($prev->ID)?>" class="btn_prev"><?=$prev->post_title; ?></a>
			<?php endif; ?>
			
			<?php if($next) : ?>
				<a href="<?=get_permalink($next->ID)?>" class="btn_next"><?=$next->post_title; ?></a>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>