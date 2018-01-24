<?php get_header(); the_post(); ?>
		<div class="main-container">
			<header class="page-header">
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
						<div class="col-sm-12 text-center">
							<span class="text-white alt-font">Error</span>
							<h1 class="text-white error-404 vis vis-up">404</h1>
							<p class="lead text-white"><?php _e('Lo sentimos!, eso que busca no esta, o nunca existió.','captec'); ?></p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
		</div>
		<section>
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12 text-center">
		                <h2>Sitemap</h2>
		            </div>
		        </div>
		    </div>
		</section>
        <section class="contact-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h6 class="alt-font">Captec S.A. <br/>Card Processing Technology</h6>
                        <ul>
                            <li><a href="<?php echo home_url('quienes-somos'); ?>"><?php _e('¿Qui&eacute;nes S&oacute;mos?','captec'); ?></a></li>
                            <li><a href="<?php echo home_url('nuestra-mision'); ?>"><?php _e('Nuestra Misi&oacute;n','captec'); ?></a></li>
                            <li><a href="<?php echo home_url('nuestra-vision'); ?>"><?php _e('Nuestra Visi&oacute;n','captec'); ?></a></li>
                            <li><a href="<?php echo home_url('nuestros-valores'); ?>"><?php _e('Nuestros valores, nuestro norte!','captec'); ?></a></li>
                        </ul>					
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h6 class="alt-font">Captec S.A. <br/><?php _e('Pol&iacute;ticas','captec'); ?></h6>
                        <ul>
                            <li><a href="<?php echo home_url('politica-de-calidad'); ?>"><?php _e('Pol&iacute;tica de Calidad','captec'); ?></a></li>
                            <li><a href="<?php echo home_url('politica-de-riesgo'); ?>"><?php _e('Pol&iacute;tica de Riesgo','captec'); ?></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h6 class="alt-font">Captec S.A. <br/><?php _e('Clientes','captec'); ?></h6>
                        <ul>
                            <?php 
                                $args = array(
                                    'post_type' => 'captecclients',
                                    'posts_per_page' => 4,
                                );
                                $clientes = get_posts( $args );
                                foreach ( $clientes as $cliente ){
                                    $link = get_post_permalink($cliente); 
                            ?>
                            <li><a href="<?php echo $link; ?>"><?php echo $cliente->post_title; ?></a></li>
                            <?php } ?>
                       </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h6 class="alt-font">Captec S.A. <br/><?php _e('Soporte','captec'); ?></h6>
                        <ul>
                            <li><a href="<?php echo home_url('faqs'); ?>"><?php _e('FAQs','captec'); ?></a></li>
                        </ul>
                        <h6 class="alt-font">Captec S.A. <br/><?php _e('Comunicaciones','captec'); ?></h6>
                        <ul>
                            <li><a href="<?php echo home_url('contacto'); ?>"><?php _e('Contacto','captec'); ?></a></li>
                        </ul>
                    </div>
                    
                </div><!--end of row-->

            </div><!--end of container-->
        </section>
        <section>
            <div class="container">
		        <div class="row">
		            <div class="col-xs-12 text-center">
		                <h3>Aun hay m&aacute;s...</h3>
		            </div>
		        </div>
		    </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h6 class="alt-font">Captec S.A. <br/><?php _e('Servicios','captec'); ?></h6>
                        <ul>
                            <?php 
                                $args = array(
                                    'post_type' => 'captecservices',
                                    'posts_per_page' => -1,
                                );
                                $servicios = get_posts( $args );
                                foreach ( $servicios as $servicio ){
                                    $link = get_post_permalink($servicio); 
                            ?>
                            <li><a href="<?php echo $link; ?>"><?php echo $servicio->post_title; ?></a></li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="alt-font">Captec S.A. <br/><?php _e('Productos','captec'); ?></h6>
                        <ul>
                            <?php 
                                $args = array(
                                    'post_type' => 'producto',
                                    'posts_per_page' => -1,
                                );
                                $productos = get_posts( $args );
                                foreach ( $productos as $producto ){
                                    $link = get_post_permalink($producto); 
                            ?>
                            <li><a href="<?php echo $link; ?>"><?php echo $producto->post_title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>