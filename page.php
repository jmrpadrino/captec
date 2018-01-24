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
							
							<h1 class="text-white"><?php the_title(); ?></h1>
							
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			<section></section>
			<section class="contact-center">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<?php the_content(); ?>
						</div>
					</div><!--end of row-->
					
				</div><!--end of container-->
			</section>
		</div>
<?php get_footer(); ?>