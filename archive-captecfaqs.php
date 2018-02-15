<?php get_header(); ?>
<section class="hero-divider">
    <div class="background-image-holder parallax-background overlay">
        <img class="background-image" alt="Poster Image For Mobiles" src="<?php echo get_template_directory_uri() . '/images/productos-de-captecsa.jpg'; ?>">
    </div>

    <div class="container">
        <div class="row">	
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                <h1 class="text-white vis vis-up">FAQ's</h1>
                <p class="lead text-white">
                    <?php _e('Sabemos que usted tiene dudas en relación con algunas cosas sobre Captec S.A., por eso hemos destinado este espacio para cubrir todos esto aspectos.','captec'); ?>
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
                        <p class="lead"><?php _e('Hemos seleccionado una serie de preguntar para resolver dudas sobre algunos temas, <br />si persiste su duda, envíenos un mensaje llendo a la p&aacute;gina de ','captec'); ?><a href="<?php echo home_url('contacto'); ?>"><?php _e('contacto','captec'); ?></a></p>
                    </div>
                </div><!--end of row-->
            </li><!--end of individual feature content-->

        </ul>
    </div>		
    <?php if ( have_posts() ){ $i = 0;?>
    <div class="projects-container" style="min-heigt: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php while ( have_posts() ){ the_post(); ?>
                    <?php if ( $i < 1 ){ ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                <div class="panel-body">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                <div class="panel-body">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php $i++; } ?>
                    </div>
                </div>
            </div>
        </div>
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