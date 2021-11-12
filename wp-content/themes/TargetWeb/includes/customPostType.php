<?php

add_action('init', 'create_TargetWeb_cpt');
if(!function_exists('create_TargetWeb_cpt')){
    function create_TargetWeb_cpt(){

        $args = array(
            'labels'    => array(
                'name'                  => _x( 'Recettes', 'Post type general name', 'TargetWeb' ),
                'singular_name'         => _x( 'Recette', 'Post type singular name', 'TargetWeb' ),
                'menu_name'             => _x( 'Recettes', 'Admin Menu text', 'TargetWeb' ),
                'name_admin_bar'        => _x( 'Recette', 'Add New on Toolbar', 'TargetWeb' ),
                'add_new'               => __( 'Ajouter une recette', 'TargetWeb' ),
                'add_new_item'          => __( 'Ajouter une nouvelle recette', 'TargetWeb' ),
                'new_item'              => __( 'Nouvelle recette', 'TargetWeb' ),
                'edit_item'             => __( 'Modifier la recette', 'TargetWeb' ),
                'view_item'             => __( 'Voir la recette', 'TargetWeb' ),
                'all_items'             => __( 'Toutes les recettes', 'TargetWeb' ),
                'search_items'          => __( 'Chercher les reettes', 'TargetWeb' ),
                'parent_item_colon'     => __( 'Recettes parents:', 'TargetWeb' ),
                'not_found'             => __( 'Pas de recette', 'TargetWeb' ),
                'not_found_in_trash'    => __( 'Pas de recette dans la corbeillle.', 'TargetWeb' ),
                'featured_image'        => _x( 'Image de la recette', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'TargetWeb' ),
                'set_featured_image'    => _x( 'Appliquer l\'image à la recette', 'Overrides the “Set featured image” phrase for 
        this post type. Added in 4.3', 'TargetWeb' ),
                'remove_featured_image' => _x( 'Supprimer l\'image de la recette', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'TargetWeb' ),
                'use_featured_image'    => _x( 'Utiliser en tant qu\'image de la recette', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'TargetWeb' ),
                'archives'              => _x( 'Recette', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'TargetWeb' ),
                'insert_into_item'      => _x( 'Ajouter aux recettes', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'TargetWeb' ),
                'uploaded_to_this_item' => _x( 'Ajouté aux recettes', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'TargetWeb' ),
                'filter_items_list'     => _x( 'Filtrer les recettes', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'TargetWeb' ),
                'items_list_navigation' => _x( 'Naviguer dans la liste des recettes', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'TargetWeb' ),
                'items_list'            => _x( 'Liste des recettes', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'TargetWeb' ),
            ),
            'public'    => true, //permet de voir le posttype dans l'interface d'admin et en front
            'hierarchical'  => false, //fait que le pst type se comporte comme un article et non une page
            'exclude_from_search'   => false, // le post type apparait dans les résultats de recherche
            'publicly_queryable'    => true, //
            'show_ui'   => true,
            'show_in_menu'  => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'show_in_rest'  => true,
            'menu_position' => 6, // sous les articles
            'menu_icon' => 'dashicons-drumstick', //picto dans l'interface d'admin
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),  //les
            // éléments constituant le post
            'taxonomies'    => array(''),
            'has_archive'   => true,
        );
        register_post_type('recettes', $args);
    }
}