<?php

// Custom post type para Food Trucks Quito
// Register Custom Post Type
/*---
1. Productos
2. Servicios
3. Clientes
---*/
function captecProduct() {

    $labels = array(
        'name'                  => _x( 'Productos', 'Post Type General Name', 'captec' ),
        'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'captec' ),
        'menu_name'             => __( 'Productos', 'captec' ),
        'name_admin_bar'        => __( 'Producto', 'captec' ),
        'archives'              => __( 'Archivos de productos', 'captec' ),
        'attributes'            => __( 'Atributos de productos', 'captec' ),
        'parent_item_colon'     => __( 'Producto padre:', 'captec' ),
        'all_items'             => __( 'Todos los Productos', 'captec' ),
        'add_new_item'          => __( 'Agregar nuevo Producto', 'captec' ),
        'add_new'               => __( 'Agregar nuevo', 'captec' ),
        'new_item'              => __( 'Nuevo Producto', 'captec' ),
        'edit_item'             => __( 'Editar Producto', 'captec' ),
        'update_item'           => __( 'Actualizar Producto', 'captec' ),
        'view_item'             => __( 'Ver Producto', 'captec' ),
        'view_items'            => __( 'Ver Productos', 'captec' ),
        'search_items'          => __( 'Buscar Producto', 'captec' ),
        'not_found'             => __( 'No se encuentra el Producto', 'captec' ),
        'not_found_in_trash'    => __( 'No se encuentra el Producto en la papelera', 'captec' ),
        'featured_image'        => __( 'Imagen Destacada', 'captec' ),
        'set_featured_image'    => __( 'Colocar imagen destacada', 'captec' ),
        'remove_featured_image' => __( 'Quitar imagen destacada', 'captec' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'captec' ),
        'insert_into_item'      => __( 'Insertar en el Producto', 'captec' ),
        'uploaded_to_this_item' => __( 'Cargar en este Producto', 'captec' ),
        'items_list'            => __( 'Lista de Productos', 'captec' ),
        'items_list_navigation' => __( 'Listado de navegación de Productos', 'captec' ),
        'filter_items_list'     => __( 'Lista de Filtros de Productos', 'captec' ),
    );
    $rewrite = array(
        'slug'                  => __('producto', 'captec'),
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Producto', 'captec' ),
        'description'           => __( 'Productos de Captec S.A.', 'captec' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'post-formats' ),
        'taxonomies'            => array( '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-store',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'productos',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'post',
    );
    register_post_type( 'producto', $args );

}
add_action( 'init', 'captecProduct', 0 );


function captecServices() {

    $labels = array(
        'name'                  => _x( 'Servicios', 'Post Type General Name', 'captec' ),
        'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'captec' ),
        'menu_name'             => __( 'Servicios', 'captec' ),
        'name_admin_bar'        => __( 'Servicio', 'captec' ),
        'archives'              => __( 'Servicio Archivos', 'captec' ),
        'attributes'            => __( 'Servicio Atributos', 'captec' ),
        'parent_item_colon'     => __( 'Servicio padre:', 'captec' ),
        'all_items'             => __( 'Todos los Servicios', 'captec' ),
        'add_new_item'          => __( 'Agregar nuevo Servicio', 'captec' ),
        'add_new'               => __( 'Agregar nuevo', 'captec' ),
        'new_item'              => __( 'Nuevo Servicio', 'captec' ),
        'edit_item'             => __( 'Editar Servicio', 'captec' ),
        'update_item'           => __( 'Actualizar Servicio', 'captec' ),
        'view_item'             => __( 'Ver Servicio', 'captec' ),
        'view_items'            => __( 'Ver Servicios', 'captec' ),
        'search_items'          => __( 'Buscar Servicio', 'captec' ),
        'not_found'             => __( 'No se encuentra el Servicio', 'captec' ),
        'not_found_in_trash'    => __( 'No se encuentra el Servicio en la papelera', 'captec' ),
        'featured_image'        => __( 'Imagen Destacada', 'captec' ),
        'set_featured_image'    => __( 'Colocar imagen destacada', 'captec' ),
        'remove_featured_image' => __( 'Quitar imagen destacada', 'captec' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'captec' ),
        'insert_into_item'      => __( 'Insertar en el Servicio', 'captec' ),
        'uploaded_to_this_item' => __( 'Cargar en este Servicio', 'captec' ),
        'items_list'            => __( 'Servicios Lista', 'captec' ),
        'items_list_navigation' => __( 'Servicios listado de navegación', 'captec' ),
        'filter_items_list'     => __( 'Lista de Filtros Servicios', 'captec' ),
    );
    $rewrite = array(
        'slug'                  => __('servicio', 'captec'),
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Servicio', 'captec' ),
        'description'           => __( 'Servicios', 'captec' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'post-formats' ),
        'taxonomies'            => array( '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-store',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'servicios',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'post',
    );
    register_post_type( 'captecservices', $args );

}
add_action( 'init', 'captecServices', 0 );


function captecClients() {

    $labels = array(
        'name'                  => _x( 'Clientes', 'Post Type General Name', 'captec' ),
        'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'captec' ),
        'menu_name'             => __( 'Clientes', 'captec' ),
        'name_admin_bar'        => __( 'Cliente', 'captec' ),
        'archives'              => __( 'Cliente Archivos', 'captec' ),
        'attributes'            => __( 'Cliente Atributos', 'captec' ),
        'parent_item_colon'     => __( 'Cliente padre:', 'captec' ),
        'all_items'             => __( 'Todos los Cliente', 'captec' ),
        'add_new_item'          => __( 'Agregar nuevo Cliente', 'captec' ),
        'add_new'               => __( 'Agregar nuevo', 'captec' ),
        'new_item'              => __( 'Nuevo Cliente', 'captec' ),
        'edit_item'             => __( 'Editar Cliente', 'captec' ),
        'update_item'           => __( 'Actualizar Cliente', 'captec' ),
        'view_item'             => __( 'Ver Cliente', 'captec' ),
        'view_items'            => __( 'Ver Clientes', 'captec' ),
        'search_items'          => __( 'Buscar Cliente', 'captec' ),
        'not_found'             => __( 'No se encuentra el Cliente', 'captec' ),
        'not_found_in_trash'    => __( 'No se encuentra el Cliente en la papelera', 'captec' ),
        'featured_image'        => __( 'Imagen Destacada', 'captec' ),
        'set_featured_image'    => __( 'Colocar imagen destacada', 'captec' ),
        'remove_featured_image' => __( 'Quitar imagen destacada', 'captec' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'captec' ),
        'insert_into_item'      => __( 'Insertar en el Cliente', 'captec' ),
        'uploaded_to_this_item' => __( 'Cargar en este Cliente', 'captec' ),
        'items_list'            => __( 'Clientes Lista', 'captec' ),
        'items_list_navigation' => __( 'Clientes listado de navegación', 'captec' ),
        'filter_items_list'     => __( 'Lista de Filtros Clientes', 'captec' ),
    );
    $rewrite = array(
        'slug'                  => __('cliente', 'captec'),
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Cliente', 'captec' ),
        'description'           => __( 'Clientes de Captec S.A.', 'captec' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'post-formats' ),
        'taxonomies'            => array( '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-store',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'clientes',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'post',
    );
    register_post_type( 'captecclients', $args );

}
add_action( 'init', 'captecclients', 0 );


function captecFaqs() {

    $labels = array(
        'name'                  => _x( 'FAQs', 'Post Type General Name', 'captec' ),
        'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'captec' ),
        'menu_name'             => __( 'FAQs', 'captec' ),
        'name_admin_bar'        => __( 'FAQ', 'captec' ),
        'archives'              => __( 'FAQ Archivos', 'captec' ),
        'attributes'            => __( 'FAQ Atributos', 'captec' ),
        'parent_item_colon'     => __( 'FAQ padre:', 'captec' ),
        'all_items'             => __( 'Todos los FAQs', 'captec' ),
        'add_new_item'          => __( 'Agregar nuevo FAQ', 'captec' ),
        'add_new'               => __( 'Agregar nuevo', 'captec' ),
        'new_item'              => __( 'Nuevo FAQ', 'captec' ),
        'edit_item'             => __( 'Editar FAQ', 'captec' ),
        'update_item'           => __( 'Actualizar FAQ', 'captec' ),
        'view_item'             => __( 'Ver FAQ', 'captec' ),
        'view_items'            => __( 'Ver FAQs', 'captec' ),
        'search_items'          => __( 'Buscar FAQ', 'captec' ),
        'not_found'             => __( 'No se encuentra el FAQ', 'captec' ),
        'not_found_in_trash'    => __( 'No se encuentra el FAQ en la papelera', 'captec' ),
        'featured_image'        => __( 'Imagen Destacada', 'captec' ),
        'set_featured_image'    => __( 'Colocar imagen destacada', 'captec' ),
        'remove_featured_image' => __( 'Quitar imagen destacada', 'captec' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'captec' ),
        'insert_into_item'      => __( 'Insertar en el FAQ', 'captec' ),
        'uploaded_to_this_item' => __( 'Cargar en este FAQ', 'captec' ),
        'items_list'            => __( 'FAQs Lista', 'captec' ),
        'items_list_navigation' => __( 'FAQs listado de navegación', 'captec' ),
        'filter_items_list'     => __( 'Lista de Filtros FAQs', 'captec' ),
    );
    $args = array(
        'label'                 => __( 'Cliente', 'captec' ),
        'description'           => __( 'FAQs para clientes de Captec S.A.', 'captec' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-store',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'faqs',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'captecfaqs', $args );

}
add_action( 'init', 'captecFaqs', 0 );
?>