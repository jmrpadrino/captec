<?php get_header(); the_post(); $prefix = 'captec'; ?>
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
							<h1 class="text-white vis vis-up"><?php the_title(); ?></h1>
							<p class="lead text-white"><?php the_excerpt(); ?></p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="duplicatable-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="feature">
								<h5><?php _e('La Oportunidad','captec'); ?></h5>
								<p><?php echo get_post_meta( get_the_ID(), $prefix.'oportunidad' ,true ); ?></p>
							</div>
						</div><!--end 4 col-->
					
						<div class="col-sm-4">
							<div class="feature">
								<h5><?php _e('Nuestra Soluci&oacute;n','captec'); ?></h5>
								<p><?php echo get_post_meta( get_the_ID(), $prefix.'solucion' ,true ); ?></p>
							</div>
						</div><!--end 4 col-->
					
						<div class="col-sm-4">
							<div class="feature">
								<h5><?php _e('Sorprendentes Resultados','captec'); ?></h5>
								<p><?php echo get_post_meta( get_the_ID(), $prefix.'resultados' ,true ); ?></p>
							</div>
						</div><!--end 4 col-->
					</div><!--end of row-->
				</div>
			</section>
			
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<h1>As&iacute; fue nuestra participación</h1>
							<p class="lead">
								<?php the_content(); ?> 
							</p>	
						</div>
					</div><!--end of row-->
				
					
				</div><!--end of container-->
			</section>
			
<?php get_footer(); ?>
				