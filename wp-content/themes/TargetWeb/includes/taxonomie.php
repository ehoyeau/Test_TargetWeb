<?php

add_action( 'init', 'create_custom_taxonomies_TargetWeb_Test', 0 );

if (!function_exists('create_custom_taxonomies_TargetWeb_Test')) {
    function create_custom_taxonomies_TargetWeb_Test() {

        $args = array(
            'labels'            => array(
                'name'              => _x( 'Types de plat', 'taxonomy general name', 'TargetWeb_Test' ),
                'singular_name'     => _x( 'Type de plat', 'taxonomy singular name', 'TargetWeb_Test' ),
                'search_items'      => __( 'Chercher un type de plat', 'TargetWeb_Test' ),
                'all_items'         => __( 'Tous les plats', 'TargetWeb_Test' ),
                'view_item'         => __( 'Voir le type de plat', 'TargetWeb_Test' ),
                'parent_item'       => __( 'Type de plat parent', 'TargetWeb_Test' ),
                'parent_item_colon' => __( 'Type de plat parent:', 'TargetWeb_Test' ),
                'edit_item'         => __( 'Modifier le type de plat', 'TargetWeb_Test' ),
                'update_item'       => __( 'Modifier le Type de plat', 'TargetWeb_Test' ),
                'add_new_item'      => __( 'Ajouter un nouveau type de plat', 'TargetWeb_Test' ),
                'new_item_name'     => __( 'Nom du type de plat', 'TargetWeb_Test' ),
                'not_found'         => __( 'Pas de type de plat trouvé', 'TargetWeb_Test' ),
                'back_to_items'     => __( 'Retour', 'TargetWeb_Test' ),
                'menu_name'         => __( 'Type de plat', 'TargetWeb_Test' ),
            ),
            'hierarchical'      => true, // true -> se comporte comme une catégorie // false  -> se comporte comme
            // une étiquette
            'public'            => true,
            'show_ui'           => true, //visible dans l'interface
            'show_admin_column' => true, //visible dans la colone de navigation dans le backoffice
            'query_var'         => true, //permet de modifier des requetes à la base de données
            'rewrite'           => array( 'slug' => 'plat' ),
            'show_in_rest'      => true, //pour l'API
        );
        register_taxonomy('plat', 'recettes', $args);
    }
}