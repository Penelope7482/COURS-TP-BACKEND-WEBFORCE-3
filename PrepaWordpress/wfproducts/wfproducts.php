<?php
/**
 * Plugin Name: wfproducts
 * Author: Pénélope P.
 * Text Domain: wfproducts
 * Domain Path: /languages
 */


function wfproducts_initPostType() {
    // Configure tous les labels du type de contenu produit
    $labels = array(
        'name'                => _x( 'Produits', 'Post Type General Name', 'wf-products' ),
        'singular_name'       => _x( 'Produit', 'Post Type Singular Name', 'wf-products' ),
        'menu_name'           => __( 'Produits', 'wf-products' ),
        'parent_item_colon'   => __( 'Produit parent', 'wf-products' ),
        'all_items'           => __( 'Tous les produits', 'wf-products' ),
        'view_item'           => __( 'Voir le produit', 'wf-products' ),
        'add_new_item'        => __( 'Ajouter un nouveau produit', 'wf-products' ),
        'add_new'             => __( 'Nouveau', 'wf-products' ),
        'edit_item'           => __( 'Modifier le produit', 'wf-products' ),
        'update_item'         => __( 'Mettre à jour le produit', 'wf-products' ),
        'search_items'        => __( 'Rechercher un produit', 'wf-products' ),
        'not_found'           => __( 'Non trouvé', 'wf-products' ),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille', 'wf-products' ),
    );
    $args = array(
        'label'               => __( 'produits', 'wf-products' ),
        'description'         => __( 'Produits WF', 'wf-products' ),
        'labels'              => $labels,
        'supports'            => array('thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon' => 'dashicons-store',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
    register_post_type( 'produits', $args );
}

add_meta_box(
    'wfproduct_title',
    __( 'Titre', 'wf-products' ),
    'wfproducts_title_meta_box_callback',
    'produits'
); 

function wfproducts_title_meta_box_callback( $post ) {
// Add a nonce field so we can check for it later.
wp_nonce_field( 'wfproduct_nonce', 'wfproduct_nonce' );
$title = get_post_meta( $post->ID, 'wfproduct_title', true );
echo '<input type="text" style="width:100%" name="wfproduct_title" value="' . esc_attr( $title ) . '"/>';
}

add_action( 'init', 'wfproducts_initPostType' );

add_action( 'add_meta_boxes', 'wfproducts_initFields' );



?>