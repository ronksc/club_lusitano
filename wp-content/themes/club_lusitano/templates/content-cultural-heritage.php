<section class="cultural-heritage">
	<div class="overlay_container visible-xs visible-sm hidden-md hidden-lg">
    	<div class="fullwidth_overlay">
	    	<h2><span>Our</span>CULTURAL HERITAGE</h2>
        </div>
    </div>
	<div class="clearfix heritage_container">
        <div class="col-sm-3 heritage_item">
			<div class="heritage_image" style="background:url(<?=get_stylesheet_directory_uri()?>/assets/img/cultural_heritage/img_feature.jpg) no-repeat 0 0 / cover;"></div>
            <div class="hover_text feature">
                <div class="hover_text_header">FEATURE STORIES</div>
                <div class="hover_text_content_wrapper">
                    <div class="hover_text_content">
                        <p>Club Lusitano is a private social club founded in 1888 when Edwin Booth, the greatest American actor of his time, purchased a Gothic Revival-style mansion facing Gramercy Park</p>
                    </div>
                </div>
            </div>
            <?php 
	            $feature_link = get_field("feature_stories_link", $post->ID);
			?>
            <a href="<?=get_permalink($feature_link[0]->ID)?>" class="overlay_link"></a>
        </div>
        <div class="col-sm-3 heritage_item">
			<div class="heritage_image" style="background:url(<?=get_stylesheet_directory_uri()?>/assets/img/cultural_heritage/img_culture.jpg) no-repeat 0 0 / cover;"></div>
        	<div class="hover_text culture">
            	<div class="hover_text_header">CULTURE & TRADITIONS</div>
                <div class="hover_text_content_wrapper">
                    <div class="hover_text_content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
            </div> 
            <?php 
	            $cultural_tradition_link = get_field("cultural_tradition_link", $post->ID);
			?>
            <a href="<?=get_permalink($cultural_tradition_link[0]->ID)?>" class="overlay_link"></a>
        </div>
        <div class="col-sm-3 heritage_item">
			<div class="heritage_image" style="background:url(<?=get_stylesheet_directory_uri()?>/assets/img/cultural_heritage/img_language.jpg) no-repeat 0 0 / cover;"></div>
        	<div class="hover_text language">
            	<div class="hover_text_header">LANGUAGE</div>
                <div class="hover_text_content_wrapper">
                    <div class="hover_text_content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
            </div>
            <?php 
	            $language_link = get_field("language_link", $post->ID);
			?>
            <a href="<?=get_permalink($language_link[0]->ID)?>" class="overlay_link"></a>
        </div>
        <div class="col-sm-3 heritage_item">
			<div class="heritage_image" style="background:url(<?=get_stylesheet_directory_uri()?>/assets/img/cultural_heritage/img_cuisine.jpg) no-repeat 0 0 / cover;"></div>
        	<div class="hover_text cuisine">
            	<div class="hover_text_header">CUISINE</div>
                <div class="hover_text_content_wrapper">
                    <div class="hover_text_content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
            </div>
            <?php 
	            $cuisine_link = get_field("cuisine_link", $post->ID);
			?>
            <a href="<?=get_permalink($cuisine_link[0]->ID)?>" class="overlay_link"></a>
        </div>
    </div>
    <div id="overlay" class="overlay_container hidden-xs hidden-sm visible-md visible-lg">
    	<div class="fullwidth_overlay">
	    	<h2><span>Our</span>CULTURAL HERITAGE</h2>
        </div>
    </div>
</section>