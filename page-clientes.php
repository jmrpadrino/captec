<?php get_header(); the_post(); $prefix = 'captec';?>
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
			<?php
    $args = array(
        'post_type' => 'captecclients',
        'posts_per_page' => 6,
    );
    $clientes = get_posts($args);
    if ($clientes){
?>
			<section class="clients-2">
				<div class="container">
				    <div class="row">
				        <div class="col-xs-12 text-center">
				            <h2><?= _e('Ellos confian en nosotros, le esperamos', 'captec') ?></h2>
				        </div>
				    </div>
					<div class="row flex-row">
                        <?php foreach ($clientes as $cliente){ ?>
                        <?php
                            $logo = get_post_meta( $cliente->ID, $prefix . 'logo_cliente', true); 
                            
                            if(!$logo){
                                $logo = 'http://placehold.it/150x150?text=Logo'; 
                            }
                        ?>
                        <a href="<?= get_the_permalink( $cliente->ID ) ?>">
				            <img alt="<?= esc_html($cliente->post_title) ?> Logo - Captec S.A." src="<?= wp_get_attachment_url( $logo ); ?>" class="img-responsive">
                        </a>
				        <?php } //end foreach ?>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
<?php } //fin si $clientes ?>
		</div>
<?php get_footer(); ?>