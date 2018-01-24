<?php get_header(); ?>
		<div class="main-container">
			<header class="fullscreen-element no-pad centered-text">
				<div class="background-image-holder parallax-background overlay">
					<img class="background-image" alt="Background Image" src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
				</div>
				
				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-12 text-center">
				            <div class="col-sm-31 col-md-21 columns1">
                                <a href="<?php echo home_url(); ?>">
                                    <img class="logo logo-light" alt="Logo" src="<?php echo get_template_directory_uri(); ?>/images/CaptecSA-Logo-Home-white.png">
                                </a>
                            </div>
							<h1 class="text-white"><?php _e('Procesamiento de Tarjetas <br>basado en una infraestructura tecnológica especializada.','captec'); ?></h1>
							<p style="color: white;"><?php _e('Somos una empresa Ecuatoriana, especializada en medios de pago, con un amplio conocimiento  en el desarrollo global del producto tarjetas de crédito y débito con marca propia o franquicia internacional, que son utilizados a través de canales tradicionales y digitales de ultima generación','captec'); ?></p>

							<a href="#seo-banner" class="btn btn-primary btn-white inner-link"><?php _e('Sepa m&aacute;s','captec'); ?></a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section id="seo-banner" class="text-banner">
				<div class="container text-center">
					
					<div class="row">
						
					<div class="col-sm-12">
							<ul class="icons-large">
								<!--li><i class="icon icon-layers icon-large"></i></li>
								<li><i class="icon icon-browser icon-large"></i></li-->
								<li><i class="icon icon_lightbulb_alt icon-large"></i></li>
							</ul>
							<h2 class="center-block vis"><?php _e('Su socio tecnológico en Tarjetas de crédito y débito.','captec'); ?></h2>
						</div></div>
					<div class="row">
						<div class="col-md-12">
							<a href="<?php echo home_url('servicios'); ?>" class="btn btn-primary vis"><?php _e('Nuestros servicios','captec'); ?></a>
							<a href="<?php echo home_url('quienes-somos'); ?>" class="btn btn-primary btn-text-only vis"><?php _e('Sepa m&aacute;s','captec'); ?></a>
						</div>
					</div>
				</div>
			</section>
			<?php 
                //producto
                $args = array(
                    'post_type' => 'producto',
                    'posts_per_page' => 1,
                    'orderby' => 'post_date',
                    'order' => 'ASD'
                );
                $producto = get_posts($args);
                $imgURL = get_the_post_thumbnail_url( $producto[0]->ID, 'full' );
            ?>
			<section class="side-image clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12 content clearfix">
							<h1 class="space-bottom-medium"><?= $producto[0]->post_title ?></h1>
							<p class="lead space-bottom-medium">
								<?= $producto[0]->post_excerpt ?>
							</p>
							<a href="<?= get_permalink( $producto[0]->ID, false ) ?>" class="btn btn-primary"><?php _e('Ver Producto','captec'); ?></a>
							<a href="<?= home_url('contacto') ?>" class="btn btn-primary btn-text-only"><?php _e('Sepa m&aacute;s','captec'); ?></a>
						</div>
						
						<!--div class="col-md-6 col-sm-12">
							<div class="inline-video-wrapper">
								<video controls="">
									<source src="video/video.webm" type="video/webm">
									<source src="video/video.mp4" type="video/mp4">
									<source src="video/video.ogv" type="video/ogg">
								</video>
							</div>
						</div-->
					</div><!--end of row-->
				</div><!--end of container-->
				<div class="image-container col-md-5 col-sm-4 pull-right">
                    <div class="background-image-holder">
                        <?php if($imgURL){ ?>
                        <a href="<?= get_permalink( $producto[0]->ID, false ) ?>">
                            <img src="<?= $imgURL ?>" class="img-responsive">
                        </a>
                        <?php } ?>
                    </div>
                </div>
			</section>
			
			<section class="side-image clearfix">
				<div class="image-container col-md-5 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img class="background-image" alt="Background Image" src="<?php echo get_template_directory_uri(); ?>/images/credit-card.jpg">
					</div>
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 content clearfix">
							<h1>Nombre producto 1<br>algun texto de llamada a la acción.</h1>
							<p class="lead">
								Este es un párrafo para explicar brevemente el producto ofertado y el tipo de  empresas al que va dirigido. este espacio funciona aleatoriamente mostrando además información o imágen relacionada con el producto.
							</p>
						
							<div class="row">
								<div class="col-md-6 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-genius"></i>
										</div>
										<div class="feature-text">
											<h6>Característica 1</h6>
											<p>
												Texto para explicar la característica 1, quizas no mayor a dos o tres lineas de texto. Incluir palabras clave. 
											</p>
										</div>
									</div>
								</div><!--end of feature-->
						
								<div class="col-md-6 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-flag"></i>
										</div>
										<div class="feature-text">
											<h6>Característica 2</h6>
											<p>
												Texto para explicar la característica 2, quizas no mayor a dos o tres lineas de texto. Incluir palabras clave. 
											</p>
										</div>
									</div>
								</div><!--end of feature-->
							</div><!--end of row-->
						
							<div class="row">
								<div class="col-md-6 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-mobile"></i>
										</div>
										<div class="feature-text">
											<h6>Característica 3</h6>
											<p>
												Texto para explicar la característica 3, quizas no mayor a dos o tres lineas de texto. Incluir palabras clave. 
											</p>
										</div>
									</div>
								</div><!--end of feature-->
						
								<div class="col-md-6 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-clipboard"></i>
										</div>
										<div class="feature-text">
											<h6>Característica 4</h6>
											<p>
												Texto para explicar la característica 4, quizas no mayor a dos o tres lineas de texto. Incluir palabras clave. 
											</p>
										</div>
									</div>
								</div><!--end of feature-->
							</div><!--end of row-->
							
							<div class="row">
							    <div class="col-md-12">
							        <a href="#" class="btn btn-primary"><?php _e('Ver producto','captec'); ?></a>
							        <a href="#" class="btn btn-primary btn-text-only"><?php _e('Sepa m&aacute;s','captec'); ?></a>
							    </div>
							</div>
					
						</div>
					</div><!--end of row-->
				</div>
			</section>
			
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<i class="icon icon-jumbo social_linkedin"></i>
							<div id="tweets" data-widget-id="492085717044981760">
							
							</div>
							<p>
				                <?php _e('Acompañenos siempre haciendo clic <strong><a href="#">aqui</a></strong> y mantengamos contacto.','captec'); ?>
							</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>
<?php get_footer(); ?>