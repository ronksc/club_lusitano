<section class="banner">
    <div class="home_banner_container">
		<?php 
			$banner_arr = get_field("banner", $post->ID);
			foreach( $banner_arr as $banner ) : ?>
			
				<div class="banner_item">
					<img src="<?=$banner['image']['url']?>" class="img-responsive hidden-xs hidden-sm visible-md visible-lg" />
					<div class="banner_bg visible-xs visible-sm hidden-md hidden-lg" style="background:url(<?=$banner['image']['url']?>) no-repeat center / cover;"></div>
					<div class="banner_text">
						<?=$banner['text']?>
					</div>
				</div>
			
		<?php endforeach;?>
	
        
    </div>
</section>
<section class="home_intro">
    <div class="container">
    	<div class="row">
            <div class="home_intro_content">
                <h2><span>Welcome to</span>CLUB LUSITANO</h2>
                <div class="home_text">
                    <!--<p>Welcome to the website of Club Lusitano, here you will find information on our venerable yet vibrant club which resides in the centre of one of the world’s greatest and most multifaceted cities. The club has remained a constant home and heart for Hong Kong’s small but active Portuguese community for 150 years since it’s founding on the 17th December 1866.</p>
                    <p>In this website you will find information on the facilities the club provides as well as news of upcoming and recent events. You will be able to take a tour of the premises of which we are rightly proud, while learning about the Club’s illustrious history and the great culture and influence of the Portuguese people.<br /><span class="italic">É com muito gosto que vos desejamos as boas vindas ao Clube Lusitano!</span></p>
                    <p>(And with great pleasure we welcome you all to Club Lusitano!)</p>-->
					
					<?php the_content(); ?>
                </div>
                <div class="clearfix home_anchor_container">
					<?php 
						$facilities_link = get_field("facilities_link", $post->ID);
						$cultural_heritage_link = get_field("cultural_heritage_link", $post->ID);
						$upcoming_events_link = get_field("upcoming_events_link", $post->ID);
					?>				
                    <div class="col-xs-4 alignLeft anchor_item">
                        <a href="<?=get_permalink($facilities_link[0])?>"><span>See our</span>FACILITIES</a>
                    </div>
                    <div class="col-xs-4 alignCenter anchor_item">
                        <a href="<?=get_permalink($cultural_heritage_link[0])?>"><span>Our</span>CULTURE &<br />HERITAGE</a>
                    </div>
                    <div class="col-xs-4 alignRight anchor_item">
                        <a href="<?=get_permalink($upcoming_events_link[0])?>"><span>Upcoming</span>EVENTS</a>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</section>