<section class="cultural-heritage">
	<div class="overlay_container visible-xs visible-sm hidden-md hidden-lg">
    	<div class="fullwidth_overlay">
	    	<h2><span>Our</span>CULTURAL HERITAGE</h2>
        </div>
    </div>
	<div class="clearfix heritage_container">
        <div class="col-sm-3 heritage_item">
			<?php 
				$feature_image = get_field("feature_stories_image", $post->ID);
	            $feature_link = get_field("feature_stories_link", $post->ID);
                $feature_stories_intro_text = get_field("feature_stories_intro_text", $post->ID);
			?>
            
            <div class="heritage_image" style="background:url(<?=$feature_image?>) no-repeat 0 0 / cover;"></div>
            <div class="hover_text feature">
                <div class="hover_text_header">FEATURE STORIES</div>
                <div class="hover_text_content_wrapper">
                    <div class="hover_text_content">
                        <p><?=$feature_stories_intro_text?></p>
                    </div>
                </div>
            </div>
            <?=($feature_link?'<a href="'.get_permalink($feature_link[0]->ID).'" class="overlay_link"></a>':'')?>
        </div>
        <div class="col-sm-3 heritage_item">
        	<?php
				$cultural_tradition_image = get_field("cultural_tradition_image", $post->ID);
	            $cultural_tradition_link = get_field("cultural_tradition_link", $post->ID);
                $cultural_tradition_intro_text = get_field("cultural_tradition_intro_text", $post->ID);
			?>
			<div class="heritage_image" style="background:url(<?=$cultural_tradition_image?>) no-repeat 0 0 / cover;"></div>
        	<div class="hover_text culture">
            	<div class="hover_text_header">CULTURE & TRADITIONS</div>
                <div class="hover_text_content_wrapper">
                    <div class="hover_text_content">
                        <p><?=$cultural_tradition_intro_text?></p>
                    </div>
                </div>
            </div> 
            
            <?=( $cultural_tradition_link?'<a href="'.get_permalink($cultural_tradition_link[0]->ID).'" class="overlay_link"></a>':'')?>
        </div>
        <div class="col-sm-3 heritage_item">
        	<?php 
				$language_image = get_field("language_image", $post->ID);
	            $language_link = get_field("language_link", $post->ID);
                $language_intro_text = get_field("language_intro_text", $post->ID);
			?>
			<div class="heritage_image" style="background:url(<?=$language_image?>) no-repeat 0 0 / cover;"></div>
        	<div class="hover_text language">
            	<div class="hover_text_header">LANGUAGE</div>
                <div class="hover_text_content_wrapper">
                    <div class="hover_text_content">
                        <p><?=$language_intro_text?></p>
                    </div>
                </div>
            </div>
            
            <?=($language_link?'<a href="'.get_permalink($language_link[0]->ID).'" class="overlay_link"></a>':'')?>
        </div>
        <div class="col-sm-3 heritage_item">
        	<?php 
				$cuisine_image = get_field("cuisine_image", $post->ID);
	            $cuisine_link = get_field("cuisine_link", $post->ID);
                $cuisine_intro_text = get_field("cuisine_intro_text", $post->ID);
			?>
			<div class="heritage_image" style="background:url(<?=$cuisine_image?>) no-repeat 0 0 / cover;"></div>
        	<div class="hover_text cuisine">
            	<div class="hover_text_header">CUISINE</div>
                <div class="hover_text_content_wrapper">
                    <div class="hover_text_content">
                        <p><?=$cuisine_intro_text?></p>
                    </div>
                </div>
            </div>
            
            <?=($cuisine_link?'<a href="'.get_permalink($cuisine_link[0]->ID).'" class="overlay_link"></a>':'')?>
        </div>
    </div>
    <div id="overlay" class="overlay_container hidden-xs hidden-sm visible-md visible-lg">
    	<div class="fullwidth_overlay">
	    	<h2><span>Our</span>CULTURAL HERITAGE</h2>
        </div>
    </div>
</section>