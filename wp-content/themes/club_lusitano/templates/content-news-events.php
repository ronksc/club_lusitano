<?php
	
?>

<section class="post_listing">
	<div class="container">
		<div class="row">
			<div class="page_title"><?php the_title(); ?></div>
			
			<div class="sorting_container">
				<span>sort by</span>
			</div>
			
			<div class="post_listing_container">
            	<?php 
					query_posts( 'post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged').'&cat='.$blog_cat.'&year='.$blog_year );
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
						<img src="<?=get_stylesheet_directory_uri()?>/assets/img/cultural_heritage/img_listing_dummy.jpg" class="img-responsive" />
					</div>
					
					<div class="post_detail_container col-sm-9">
						<div class="post_title">
							<a href="#"><?php the_title(); ?></a>
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
						
						<div class="post_excerpt"><?=the_excerpt();?><a href="#" class="btn_readmore">More</a></div>
					</div>
				</div>
                <?php endwhile; ?>
			</div>
		</div>
	</div>
</section>