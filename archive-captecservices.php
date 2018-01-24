<?php get_header(); ?>
            <section class="hero-divider">
				<div class="background-image-holder parallax-background overlay">
					<!--img class="background-image" alt="Poster Image For Mobiles" src="<?php echo get_template_directory_uri() . '/images/productos-de-captecsa.jpg'; ?>"-->
					<img class="background-image" alt="Poster Image For Mobiles" src="http://captec.com.ec/nuevaweb/wp-content/uploads/2018/01/captec-banner.jpg">
				</div>
				
				<div class="container">
					<div class="row">	
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<h1 class="text-white vis vis-up"><?php _e('Servicios de Captec S.A.','captec'); ?></h1>
							<p class="lead text-white">
							    <?php _e('Hemos implementado proyectos en diferentes instituciones financieras en <strong>Colombia</strong> y <strong>Ecuador</strong>, los mismos han sido ejecutados exitosamente desde el punto de vista Tecnológico, Operativo, Financiero, Comercial  y de Mercadeo','captec'); ?>
							</p>
						</div>
					</div><!--end of row-->
				</div><!--end of row-->
            </section>
            <section>	
				
				<div class="container">
					<ul class="selector-content">
						<li class="clearfix active">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2 text-center">
								    <h2>Texto SEO para posicionamiento de los servicios de Captec S.A.</h2>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
		
					</ul>
				</div>		
<?php if ( have_posts() ){ ?>
                <div class="projects-container">
<?php while ( have_posts() ){ the_post(); ?>
                    <div class="col-md-6 col-sm-12 no-pad project development image-holder">
                        <div class="background-image-holder">
                            <?php if ( has_post_thumbnail() ){ ?>
                            <?php the_post_thumbnail(); ?>
                            <?php }else{ ?>
                            <img class="background-image" alt="Background Image" src="<?php echo get_template_directory_uri() . '/images/default-list-captecsa.jpg'; ?>">
                            <?php } ?>
                        </div>
                        <div class="hover-state">
                            <div class="align-vertical">
                                <h2 class="text-white vis vis-up"><?php the_title(); ?></h2>
                                <!--p class="text-white">
                                    <?php 
                                        $leng = get_the_excerpt();
                                        echo strlen($leng);
                                        //the_excerpt(); 
                                    ?>
                                </p-->
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-white"><?php _e('Ver este servicio','captec'); ?></a>
                            </div>
                        </div>
                    </div><!--end of individual project-->
<?php } ?>
					
				</div><!--end of projects-container-->
<?php
    }else{
?>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1>Lo sentimos aun no hay publicaciones aqui. </h1>
                        </div>
                    </div>
                </div>
<?php
    }
?>
            </section>
<?php get_footer(); ?>