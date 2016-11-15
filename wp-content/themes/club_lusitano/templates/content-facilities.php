
<section class="facilities_landing">
	<div class="container">
		<div class="row">
			<div id="facilities">
				<?php
				$args = array( 'numberposts' => -1, 'post_type' => 'facility', 'post_status' => 'publish', 'order' => 'ASC', 'orderby' => 'menu_order', 'suppress_filters' => 0);
				$results = get_posts( $args );
				foreach( $results as $result ) : 
					//print_r($result);
					$facilities_image = get_field('listing_page_image', $result->ID);
					
					//print_r($facilities_image);
					$facilities_name = get_field('listing_page_name', $result->ID);
					$facilities_description = get_field('listing_page_description', $result->ID);
				?>
					<div class="facilities_item">
						<img src="<?=$facilities_image['url']?>" class="img-responsive" />
						<div class="overlay">
							<div class="facilities_name">
								<!--28/f<br />O RETIRO-->
								<?=$facilities_name?>
							</div>
							<div class="facilities_detail">
								<div class="facilities_name">
									<?=$facilities_name?>
								</div>
								<div class="detail_content">
									<?=$facilities_description?>
								</div>
							</div>
						</div>
						<a href="<?=get_permalink( $result->ID )?>" class="overlay_link"></a>
					</div>
				<?php endforeach; ?>
			
				<!--<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_1.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							28/f<br />O RETIRO
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								28/f<br />O RETIRO
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>
				<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_2.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							27/f<br />SALÃO NOBRE DE CAMOES 
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								27/f<br />SALÃO NOBRE DE CAMOES 
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>
				<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_3.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							26/f<br />SALA LEAL SENADO
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								26/f<br />SALA LEAL SENADO
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>
				<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_4.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							25/f<br />SALA PENHA
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								25/f<br />SALA PENHA
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>
				<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_5.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							25/f<br />SALA PRAIA GRANDE
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								25/f<br />SALA PRAIA GRANDE
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>
				<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_6.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							25/f<br />SALA DE LILAU
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								25/f<br />SALA DE LILAU
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>
				<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_7.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							24/f<br />PISO COMENDADOR ARNALDO DE OLIVEIRA SALES
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								24/f<br />PISO COMENDADOR ARNALDO DE OLIVEIRA SALES
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>
				<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_8.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							24/f<br />SALA LORCHA
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								24/f<br />SALA LORCHA
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>
				<div class="facilities_item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/facilities/img_9.jpg" class="img-responsive" />
					<div class="overlay">
						<div class="facilities_name">
							23/f<br />SALA DE BILHAR
						</div>
						<div class="facilities_detail">
							<div class="facilities_name">
								23/f<br />SALA DE BILHAR
							</div>
							<div class="detail_content">
								The grand ballroom with open views across Central, Government House plus the Zoological & Botanical Gardens<a href="#">See all photos»</a>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>	
</section>