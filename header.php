<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" <?php echo language_attributes(); ?>> <!--<![endif]-->
    <head>
        <!-- Diseño y desarrollo por Jose Manuel Rodriguez Padrino @ Choclomedia.com - Email: jmrpadrino@gmail.com -->
        <meta charset="utf-8">
        
        <title><?php _e('Tecnología de procesamiento de tarjetas','captec'); ?> | Captec S.A.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="<?php echo get_template_directory_uri(); ?>/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/theme-blues.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all"/>
        
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <!--
    	<div class="loader1">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
        -->	
		<div class="nav-container">
			<nav class="top-bar overlay-bar">
				<div class="container">
				
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<span class="alt-font"><i class="icon icon_pin"></i> Av. República del Salvador N35-82 y Portugal - Edificio Twin Towers Piso 11 Ofic. A-B, Quito - Ecuador</span>
								<span class="alt-font"><i class="icon icon_mail"></i> <a href="mailto:info@captec.com.ec">info@captec.com.ec</a></span>
								
                                <ul class="nav navbar-nav navbar-right navbar-languajes">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon icon_globe-2 icon-large"></i> <span class="caret"></span></a>
                                        <?php dynamic_sidebar( 'translation' ); ?>
                                    </li>
                                </ul>
							
								<div class="pull-right">
									<a href="<?php echo home_url('contacto'); ?>" class="btn btn-primary btn-filled btn-xs"><?php _e('Contactar', 'captec'); ?></a>
								</div>
							</div>
						</div>
					</div><!--end of row-->
				
				
					<div class="row nav-menu">
						
					
						<div class="col-sm-12 col-md-12 columns">
							<ul class="menu">
				                <li><a href="<?php echo home_url(); ?>" title="<?php _e('Ir al inicio', 'captec'); ?>">Inicio</a></li>
								<li class="has-dropdown"><a href="#" title="<?php _e('Con&oacute;ce a Captec S.A.', 'captec') ?>"><?php _e('La Empresa','captec'); ?></a>
									<div class="subnav subnav-fullwidth">
										<div class="col-md-3">
											<h6 class="alt-font">Captec S.A. <br/>Card Processing Technology</h6>
											<ul class="subnav">
												<li><a href="<?php echo home_url('quienes-somos'); ?>"><?php _e('¿Qui&eacute;nes S&oacute;mos?','captec'); ?></a></li>
												<li><a href="<?php echo home_url('nuestra-mision'); ?>"><?php _e('Nuestra Misi&oacute;n','captec'); ?></a></li>
												<li><a href="<?php echo home_url('nuestra-vision'); ?>"><?php _e('Nuestra Visi&oacute;n','captec'); ?></a></li>
												<li><a href="<?php echo home_url('nuestros-valores'); ?>"><?php _e('Nuestros valores, nuestro norte!','captec'); ?></a></li>
											</ul>	
										</div>
										<div class="col-md-6">
								            <h6 class="alt-font">Captec S.A. <br/><?php _e('Pol&iacute;ticas','captec'); ?></h6>
											<ul class="subnav">
												<li><a href="<?php echo home_url('politica-de-calidad'); ?>"><?php _e('Pol&iacute;tica de Calidad','captec'); ?></a></li>
												<li><a href="<?php echo home_url('politica-de-riesgo'); ?>"><?php _e('Pol&iacute;tica de Riesgo','captec'); ?></a></li>
											</ul>	
										</div>
										
										<div class="col-md-3">
											<a class="btn btn-primary" href="#"><?php _e('¿Alguna duda?','captec'); ?></a>
											<a class="btn btn-primary btn-filled" href="#"><?php _e('Envíe un mensaje','captec'); ?></a>
										</div>
									</div>
								</li>
								<li class="has-dropdown"><a href="#"><?php _e('Clientes','captec'); ?></a>
									<ul class="subnav">
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
                                        <?php 
                                            }
                                            if ( count( $clientes ) > 1 ){
                                        ?>
										<li><a href="<?php echo home_url('clientes'); ?>"><?php _e('Todos los Clientes','captec'); ?></a></li>
										<?php } //end count productos ?>
									</ul>
								</li>
								<li class="has-dropdown"><a href="#"><?php _e('Productos','captec'); ?></a>
									<ul class="subnav">
									    <?php 
                                            $args = array(
                                                'post_type' => 'producto',
                                                'posts_per_page' => 4,
                                            );
                                            $productos = get_posts( $args );
                                            foreach ( $productos as $producto ){
                                                $link = get_post_permalink($producto); 
                                        ?>
                                                <li><a href="<?php echo $link; ?>"><?php echo $producto->post_title; ?></a></li>
                                        <?php 
                                            }
                                            if ( count( $productos ) > 1 ){
                                        ?>
										<li><a href="<?php echo home_url('productos'); ?>"><?php _e('Todos los productos','captec'); ?></a></li>
										<?php } //end count productos ?>
									</ul>
								</li>
								<li class="has-dropdown"><a href="#"><?php _e('Servicios','captec'); ?></a>
									<ul class="subnav">
										<?php 
                                            $args = array(
                                                'post_type' => 'captecservices',
                                                'posts_per_page' => 4,
                                            );
                                            $servicios = get_posts( $args );
                                            foreach ( $servicios as $servicio ){
                                                $link = get_post_permalink($servicio); 
                                        ?>
                                                <li><a href="<?php echo $link; ?>"><?php echo $servicio->post_title; ?></a></li>
                                        <?php 
                                            }
                                            if ( count( $servicios ) > 1 ){
                                        ?>
										<li><a href="<?php echo home_url('servicios'); ?>"><?php _e('Todos los Servicios','captec'); ?></a></li>
										<?php } //end count productos ?>
									</ul>
								</li>
								<li><a href="<?php echo home_url('faqs'); ?>"><?php _e('FAQs', 'captec'); ?></a></li>
								<li><a href="<?php echo home_url('contacto'); ?>"><?php _e('Contacto', 'captec'); ?></a></li>
							</ul>

							<ul class="social-icons text-right pull-right">
								<li>
									<a href="#">
										<i class="icon social_linkedin"></i>
									</a>
								</li>
							</ul>
						</div>
					</div><!--end of row-->
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div><!--end of container-->
			</nav>
		
			
		
			
		
			
		</div>