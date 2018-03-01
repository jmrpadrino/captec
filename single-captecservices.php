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
							<h1 class="text-white vis vis-up"><?php the_title(); ?></h1>
							<div class="lead text-white"><?php the_excerpt(); ?></div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			<section>
			    <div class="container">
			        <div class="row">
			            <div class="col-xs-12">
			                <h2><?php _e('Descripción del Servicio','captec'); ?></h2>
			            </div>
			        </div>
			    </div>
			</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<p class="lead">
								<?php the_content(); ?> 
							</p>	
						</div>
					</div><!--end of row-->
					
				</div><!--end of container-->
			</section>
<?php get_footer(); ?>
				