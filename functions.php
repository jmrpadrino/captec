<?php

// Captec S.A. theme functions
// Requerir los CPTs
require_once('includes/captecsa-cpt.php');
require_once('includes/captecsa-meta.php');
require_once('includes/captecsa-taxonomies.php');

// Languaje Support
load_theme_textdomain( 'captec', get_template_directory() . '/languages/' );

wp_register_script( 'captec', get_template_directory_uri() .'/js/scripts.js', array('jquery') );
wp_localize_script( 'captec', 'captec', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
wp_enqueue_script( 'captec', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), '1.1', true);


/* Theme components */
add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );

add_theme_support( 'post-thumbnails' );


//Languaje Front-End Support
if (function_exists('register_nav_menus')) {
    register_nav_menus( array(
        'languages-nav' => __( 'Lenguajes', 'captec' ),
    ) );
};
if (function_exists('register_sidebar')) {
    register_sidebar( array(
        'name'          => __( 'Multi Idioma', 'captec' ),
        'id'            => 'translation',
        'description'   => __( 'Uso exclusivo del qTranslate-x', 'captec' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
};

/* Send ajax mail */
function send_mail_via_ajax(){

    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    //$phone = filter_input(INPUT_POST, 'phone');
    //$nameofplace = filter_input(INPUT_POST, 'nameofplace');
    $inquiry = filter_input(INPUT_POST, 'inquiry');

    /* Google reCaptcha features
    $secret = "6Lc1Ch0UAAAAALVmIyV_K8Bf5uspZL09RfwzY_JH";
    $response = null;

    $path = 'https://www.google.com/recaptcha/api/siteverify?';
    $path .= 'secret=' . $secret;
    $path .= '&remoteip=' . $_SERVER["REMOTE_ADDR"];
    $path .= '&v=php_1.0';
    $path .= '&response='. $_POST["g-recaptcha-response"];

    $response = file_get_contents( $path );

    $answers = json_decode($response, true);

   if ( $response != null && trim($answers ['success']) == true ) { */

        ob_start();
?>
<table border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#cccccc" style="width: 100%;">
    <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" style="margin-top:35px;margin-bottom:35px;font-family:Verdana, Helvetica;">
        <tr style="background-color: #232323;">
            <td align="center">
                <h1 style="color: white">Mensaje Recibido</h1>
            </td>
        </tr>
        <tr>
            <td style="color:#222222!important; padding: 30px;">
                <h2 style="color:#2889B1;text-transform:uppercase;font-weight:800;margin-top: 35px;">Informacion del contacto</h2>
                <p style="color: #2889B1;"><strong>Nombre:</strong> <?php echo $name ?></p>
                <p style="color: #2889B1;"><strong>Email:</strong> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>

                <h2 style="color:#2889B1;text-transform:uppercase;font-weight:800;margin-top: 70px;">Mensaje</h2>
                <p style="font-size:20px; color: #2889B1;"><?php echo $inquiry ?></p>
            </td>
        </tr>
        <tr style="background-color: #2889B1; color: #232323; margin-top: 35px;">
            <td align="center">
                <p style="margin-top:35px;margin-bottom:35px;">Este email fue enviado desde Captec Website, el <?php echo date("d/m/Y") ?> a las <?php echo date("h:i") ?></p>
            </td>
        </tr>
    </table>
</table>
<?php
        $body = ob_get_clean();

        //$contacto = get_page_by_path('contact');
        //$mail_admin = get_post_meta($contacto->ID, 'em', true);
        //$to = 'colocar un solo email';
        $subject = 'Mensaje recibido. - CAPTEC';

        require_once ABSPATH . WPINC . '/class-phpmailer.php';

        $mail = new PHPMailer( true );
        //$mail->AddAddress($to);
        try{
            $mail->AddAddress('lpazymino@captec.com.ec', 'Director Comercial');
            $mail->AddAddress('jmrpadrino@gmail.com', 'Webmaster');
            $mail->FromName = 'Web - Captec';
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->IsHTML();
            $mail->CharSet = 'utf-8';
            $mail->Send();
            echo '1';
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e){
            echo $e->getMessage(); //Boring error messages from anything else!
        }
        die();
        //echo trim($answers ['success']);
        /*try {
            $mail->AddAddress($to);
            $mail->FromName = 'Sentry Wellhead Systems - Contact';
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->IsHTML();
            $mail->CharSet = 'utf-8';
            $mail->Send();
            echo trim($answers ['success']);
        } catch (phpmailerException $e) {
          echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo trim($answers ['success']);
          echo $e->getMessage(); //Boring error messages from anything else!
        }*/
    /*}else{
        echo trim($answers ['success']);
    }*/
}
add_action('wp_ajax_send_mail_via_ajax', 'send_mail_via_ajax');
add_action('wp_ajax_nopriv_send_mail_via_ajax', 'send_mail_via_ajax');