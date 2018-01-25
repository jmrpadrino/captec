<?php get_header(); ?>
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
							<span class="text-white alt-font">Le invitamos a</span>
							<h1 class="text-white">Contactar</h1>
							
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="contact-center">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h2 class="vis"><?= _e('Para nosotros es un placer<br />que hablemos de su proyecto.','captec') ?></h2>
							<!--p class="lead">
								Este es un párrafo para persuadir e invitar al usuario a que envíe un mensaje a través del formulario presentado, este texto no debe ser mayor que dos o tres líneas.
							</p-->
						</div>
					</div><!--end of row-->
					
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
							<div class="form-wrapper clearfix">
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
			<section class="google-maps" style="padding: 0; overflow: auto; height: 420px;">
			    <div id="map-zone" style="height: 420px;"></div>
			    <script type="text/javascript">
                    
                    function initMap() {
                        //-0.180743, -78.479987
                        var myLatLng = {lat: -0.180743, lng: -78.479987};
                        var markericon = '<?php echo get_template_directory_uri(); ?>/images/gMaps-captec-logo.png';
                        var map = new google.maps.Map(document.getElementById('map-zone'), {
                            zoom: 18,
                            center: myLatLng,
                            zoomControl: true,
                            disableDoubleClickZoom: false,
                            mapTypeControl: true,
                            scaleControl: true,
                            scrollwheel: false,
                            panControl: true,
                            streetViewControl: false,
                            draggable : true,
                            overviewMapControl: false,
                            overviewMapControlOptions: {
                                opened: false,
                            },
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                          });

                          var marker = new google.maps.Marker({
                            icon: markericon,
                            position: myLatLng,
                            map: map,
                            title: 'Captec'
                          });
                        }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQyfc5EQnMLR5rHsRND9c8g0cdHanDLBs&callback=initMap"></script>
			</section>
		</div>
<?php get_footer(); ?>