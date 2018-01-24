<?php get_header(); ?>
<?php the_post(); ?>
        <div class="main-container">
			<section class="hero-divider">
			    <?php 
                    if( has_post_thumbnail() ){
                        $featured_image = get_the_post_thumbnail_url( $post_id, 'large');
                    }else{
                        $featured_image = get_template_directory_uri() . '/images/default-page-image.jpg';
                    }
                ?>
				<div class="background-image-holder parallax-background overlay">
					<img class="background-image" alt="Poster Image For Mobiles" src="<?php echo $featured_image; ?>">
				</div>
				
				<div class="container">
					<div class="row">	
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
						    <img class="text-center" src="<?php echo get_template_directory_uri(); ?>/images/captec-master-card-member-service-provider.png" width="80">
							<h1 class="text-white">Somos Member Service Provider (MSP) de MasterCard</h1>
							
							<!--p class="lead text-white">
								Este es un párrafo para explicar brevemente los beneficios de ser MPS. Un texto que no ocupe mas de dos o tres lineas y que tenga las pálabras clave para posicionar el servicio de MPS.
							</p-->
							
							
						</div>
					</div><!--end of row-->
				</div><!--end of row-->
			</section>
			
			<section class="feature-selector">
				<div class="container">
					
				</div>
				
				<div class="container">
					<ul class="selector-content">
						<li class="clearfix active">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
								    <?php the_content(); ?>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
		
					</ul>
				</div>
			</section>
			
			<section class="team-1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="vis">El Equipo Captec S.A.</h2>
						</div>
					</div><!--end of row-->
					
					<div class="row space-bottom-large">
						<div class="col-sm-4 col-sm-offset-2">
							<div class="team-1-member">
								<!--img alt="Team Member" src="img/team-small-1.png "-->
								<h2>Pablo Ramírez Gasca</h2>
								<h5><?php _e('Presidente Ejecutivo','captec'); ?></h5>
								<a href="#" class="btn btn-primary vis vis-up">Contactar</a>
							</div><!--end of team member-->
						</div>
						
						<div class="col-sm-4">
							<div class="team-1-member">
								<!--img alt="Team Member" src="img/team-small-3.png "-->
								<h2>Carlos Segovia Ramos</h2>
								<h5><?php _e('Gerente General','captec'); ?></h5>
								<a href="#" class="btn btn-primary vis vis-up">Enviar mensaje</a>
							</div><!--end of team member-->
						</div>
						
		
					</div><!--end of row-->
					
					<!--end of row-->
					
				</div><!--end of container-->
			</section>
			
			<section class="clients-2">
				<div class="container">
				    <div class="row">
				        <div class="col-xs-12 text-center">
				            <h2>Ellos confian en nosotros, le esperamos</h2>
				        </div>
				    </div>
					<div class="row flex-row">
				        <img alt="Captec S.A. - Client Logo" src="<?php echo get_template_directory_uri(); ?>/images/coopccp-captec.png">
				        <img alt="Captec S.A. - Client Logo" src="<?php echo get_template_directory_uri(); ?>/images/coopccp-captec.png">
				        <img alt="Captec S.A. - Client Logo" src="<?php echo get_template_directory_uri(); ?>/images/oscus-captec.png">
						
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>
<?php get_footer(); ?>