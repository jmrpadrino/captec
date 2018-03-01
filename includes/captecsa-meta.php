<?php
    ////////////////////////////////////////
    // METABOXES
    ////////////////////////////////////////
    add_filter( 'rwmb_meta_boxes', 'sentry_register_meta_boxes' );
    /*-- METABOXES --*/
    function sentry_register_meta_boxes( $meta_box ) {
        
        $prefix = 'captec';
        
        $meta_box[] = array(
            'id' => 'captec-clients-features-logo',
            'title' => 'Logo cliente',
            'pages' => array('captecclients'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'name' => 'Imagen',
                    'id' => $prefix .'logo_cliente',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1,
                    'placeholder' => 'Logo del cliente'
                )
            )
        );
    
        $meta_box[] = array(
            'id' => 'captec-clients-features',
            'title' => 'Ruta cliente',
            'pages' => array('captecclients'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'name' => 'La Oportunidad',
                    'id' => $prefix .'oportunidad',
                    'type' => 'textarea',
                    'placeholder' => 'Texto para hablar sobre la necesidad del cliente'
                ),
                array(
                    'name' => 'Nuestra Solución',
                    'id' => $prefix .'solucion',
                    'type' => 'textarea',
                    'placeholder' => 'Texto para hablar sobre la herramienta aplicada al cliente'
                ),
                array(
                    'name' => 'Sorprendentes Resultados',
                    'id' => $prefix .'resultados',
                    'type' => 'textarea',
                    'placeholder' => 'Texto para hablar sobre los resultados obtenidos'
                )
            )
        );
        
        return $meta_box;
    }
    /*----- FIN DE LOS METABOXES -----*/

    function trademark() {
        echo "<!-- Dev by Jose Manuel Rodriguez Padrino with the Choclomedia.com Team | email: jmrpadrino@gmail.com -->";
    }
    add_action( 'wp_head', 'trademark', 5 );
    add_action( 'wp_footer', 'trademark', 5 );
?>