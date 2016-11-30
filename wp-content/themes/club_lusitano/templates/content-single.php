<?php 
$categories = get_the_category();

while (have_posts()) : the_post(); ?>

<section class="article_container <?=$categories[0]->slug?>">
	<div class="container">
		<div class="row">
			<div class="article_header ">
				
				<div class="category"><?=$categories[0]->name?></div>
				
			<?php if(get_field('title', $post->ID)){ ?>
				<h2><?=strip_tags(get_field('title', $post->ID), '<em>, <br>, </br>')?></h2>
			<?php }else{ ?>
				<h2><?php the_title(); ?></h2>
			<?php } ?>
				
				<div class="author_detail">
					<?php if(get_field('author', $post->ID)){?>
					<span class="author">BY <?=get_field('author', $post->ID)?></span>
					<?php } ?>
					
					<!--<span class="date">OCTOBER 25, 2016 4:11PM</span>-->
					<span class="date"><? the_date(); ?></span>
				</div>
				
				<div class="shareContainer addthis_toolbox addthis_default_style" addthis:title="<?php the_title(); ?>">
					<a class="addthis_button_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a class="addthis_button_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a class="addthis_button_email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</div>
			</div>
			
			<div class="article_intro">
				<?php if(get_field('intro', $post->ID)){
					echo get_field('intro', $post->ID);
				} ?>
			</div>
			
			
			<div class="clearfix">
				<div class="article_media col-sm-4 col-sm-push-8">

					<?php
					$video_thumbnail = get_field("video_thumbnail", $post->ID);
					$video_youtube_link = get_field("video_youtube_link", $post->ID); 
					
					if($video_youtube_link){
					?>
					<div class="media_container">
						<a class="video_link" href="JavaScript:html5Lightbox.showLightbox(3, '<?=$video_youtube_link?>', '');"><img src="<?=$video_thumbnail['url']?>" class="img-responsive"></a>
				    </div>
					<? } ?>
					<?php
					$gallery_arr = get_field("gallery", $post->ID);
						
					if(sizeOf($gallery_arr) > 0){
						foreach($gallery_arr as $gallery){
						
						//print_r($gallery);
					?>
					<!-- Image -->
					<div class="media_container">
						<div class="media_wrapper">
							<img src="<?=$gallery['url']?>" class="img-responsive" />
						</div>
						<div class="caption"><?=$gallery['caption']?></div>
					</div>
					<?php } 
					}?>
					
				</div>
			
				<div class="article_content col-sm-8 col-sm-pull-4">
					<?php the_content();?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>

<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58355aed61051595"></script>