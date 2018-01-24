<?php

// Register Custom Taxonomy Tipo de Negocio
function captecsa_tipo_servicios() {

    $labels = array(
        'name'                       => _x( 'Categorias', 'Taxonomy General Name', 'captec' ),
        'singular_name'              => _x( 'Categoria', 'Taxonomy Singular Name', 'captec' ),
        'menu_name'                  => __( 'Categorias', 'captec' ),
        'all_items'                  => __( 'Todos las Categorias', 'captec' ),
        'parent_item'                => __( 'Categoria padre', 'captec' ),
        'parent_item_colon'          => __( 'Categoria padre:', 'captec' ),
        'new_item_name'              => __( 'Nueva Categoria', 'captec' ),
        'add_new_item'               => __( 'Agregar nueva Categoria', 'captec' ),
        'edit_item'                  => __( 'Editar Categoria', 'captec' ),
        'update_item'                => __( 'Actualizar Categoria', 'captec' ),
        'view_item'                  => __( 'Ver Categoria', 'captec' ),
        'separate_items_with_commas' => __( 'Separe las Categorias con comas', 'captec' ),
        'add_or_remove_items'        => __( 'Agregar o Quitar Categoria', 'captec' ),
        'choose_from_most_used'      => __( 'Seleccionar de los as usados', 'captec' ),
        'popular_items'              => __( 'Categorias populares', 'captec' ),
        'search_items'               => __( 'Buscar Categoria', 'captec' ),
        'not_found'                  => __( 'No se encuentra', 'captec' ),
        'no_terms'                   => __( 'No hay Categorias', 'captec' ),
        'items_list'                 => __( 'Listado de Categorias', 'captec' ),
        'items_list_navigation'      => __( 'Lista de navegación de Categorias', 'captec' ),
    );
    $rewrite = array(
        'slug'                       => 'servicios-de',
        'with_front'                 => true,
        'hierarchical'               => false,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => $rewrite,
    );
    register_taxonomy( 'servicios-de', array( 'captecservices' ), $args );

}
add_action( 'init', 'captecsa_tipo_servicios', 0 );
?>