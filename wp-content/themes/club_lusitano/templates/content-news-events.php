<?php
	if( isset($_GET['sort']) ){
		$sort = $_GET['sort'];
	}else{
		$sort = 'desc';
	}	
	
	$full_uri = get_permalink();
?>

<section class="post_listing">
	<div class="container">
		<div class="row">
			<div class="page_title"><?php the_title(); ?></div>
			
			<div class="sorting_container">
				<div class="clearfix">
					<span>sort by</span>
					<div style="float:right">
						<select id="post_sorting">
							<option value="desc" <?php if(strcmp('desc', $sort) == 0){ echo 'selected = selected'; }?>>Newest</option>
							<option value="asc" <?php if(strcmp('asc', $sort) == 0){ echo 'selected = selected'; }?>>Oldest</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="post_listing_container">
            	<?php 
					//query_posts( 'post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged').'&cat=7');
					$args = array(
						'post_type'  => 'post',
						'post_status' => 'publish',
						'cat' => 7,
						'meta_key' => 'date',
						'orderby' => 'meta_value_num',
						'order' => $sort
					);
					
					//query_posts( 'post_type=post&post_status=publish&paged='. get_query_var('paged').'&cat=7');
					
					query_posts($args);
				?>
                
                <?php if (!have_posts()) : ?>
                  <div class="alert alert-warning">
                    <?php _e('Sorry, no results were found.', 'roots'); ?>
                  </div>
                  <?php get_search_form(); ?>
                <?php endif; ?>
            
            	<?php while (have_posts()) : the_post(); ?>
				<div class="post_item clearfix">
					<div class="thumb_container col-sm-3">
					
						<?php 
						$image_results = get_field("post_image", $post->ID);
						if(!empty($image_results)){
						?>
							<img src="<?=$image_results['url'];?>" class="img-responsive" />	
						<?php //}else {?>
							<!--<img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_no-img.png" class="img-responsive" />-->
						<?php } ?>
					</div>
					
					<div class="post_detail_container col-sm-9">
						<div class="post_title">
							<?php the_title(); ?>
						</div>
						
						<div class="post_author_detail">
                        	<?php if(get_field("date",$post->ID)){?>
							<span class="date"><?=get_field("date",$post->ID)?></span>
                            <?php } ?>
                            
                            <?php if(get_field("period",$post->ID)){?>
							<span class="period"><?=get_field("period",$post->ID)?></span>
                            <?php } ?>
                            
                            <?php if(get_field("venue",$post->ID)){?>
							<span class="venue"><?=get_field("venue",$post->ID)?></span>
                            <?php } ?>
						</div>
						
						<div class="post_excerpt"><?=the_excerpt();?><!--<a href="#" class="btn_readmore">More</a>--></div>
					</div>
				</div>
                <?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<script>
	var full_url = '<?=$full_uri?>';
</script>