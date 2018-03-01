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
			                <h2><?php _e('Descripción del Producto','captec'); ?></h2>
			            </div>
			        </div>
			    </div>
			</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-8">
							<p class="lead">
								<?php the_content(); ?> 
							</p>	
						</div>
						<div class="col-sm-6 col-md-4">
						    <div class="form-wrapper clearfix">
						        <h3 class="text-center vis vis-up inside-form-title"><?php _e('Consulte sobre este producto','captec'); ?></h3>
								<form class="form-contact email-form">
									<div class="inputs-wrapper">
										<input class="form-name validate-required" type="text" placeholder="<?php _e('Su nombre'); ?>" name="name">
										<input class="form-email validate-required validate-email" type="text" name="email" placeholder="<?php _e('Su correo electrónico'); ?>">
										<textarea class="form-message validate-required" name="message" placeholder="<?php _e('Su mensaje'); ?>"></textarea>
									</div>
									<input type="submit" class="send-form" value="<?php _e('Enviar'); ?>">
									<div class="form-success">
										<span class="text-white"><?php _e('Mensaje enviado, gracias por contactar.'); ?></span>
									</div>
									<div class="form-error">
										<span class="text-white"><?php _e('Por favor complete la información en todos los campos disponibles.'); ?></span>
									</div>
								</form>
							</div>
						</div>
					</div><!--end of row-->
				
					
				</div><!--end of container-->
			</section>
<?php get_footer(); ?>