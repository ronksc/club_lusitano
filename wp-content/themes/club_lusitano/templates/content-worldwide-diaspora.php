<section class="diaspora_content_container">
	<div class="container">
		<div class="row">
			<div class="page_title"><?php the_title(); ?></div>
			
			<?php
			// check if the repeater field has rows of data
			if( have_rows('unit_information') ):
				// loop through the rows of data
				while ( have_rows('unit_information') ) : the_row(); ?>
				<div class="diaspora_group">
					<div class="sub_title"><?php the_sub_field('group_title'); ?></div>
					<?php if( have_rows('group_information') ):?>
					<div class="diaspora_content">
						<?php 
						$rows_output = 0;
						// loop through rows (sub repeater)
						while( have_rows('group_information') ): the_row();
							if ($rows_output % 3 == 0) { 
								echo '<div class="clearfix">';
							}
						?>
							<div class="col-sm-4 diaspora_item">
								<div class="diaspora_inner_container">
									<h3><?php the_sub_field('unit_name');?></h3>
									<p>Vitor Sereno, Consul General, Rue Pedro Nolasco da Silva 45, Macau</p>
									<p>Ph : +853 28356660</p>
									<p>Fax: +853 2835 6658</p>
									<p>Email: <a href="mailto:macau@mne.pt">macau@mne.pt</a></p>
									<p><a href="http://www.cgportugal.org/" target="_blank">www.cgportugal.org/</a></p>
								</div>
							</div>
						<?php 
							if ($rows_output % 3 == 2) {
							  echo '</div>';
						    }
						    $rows_output++;
						endwhile; 
						echo '</div>';
						?>
					</div>
					<?php endif; ?>
				</div>
			<?php
				endwhile;
			endif;
			?>
		</div>
	</div>	
</section>