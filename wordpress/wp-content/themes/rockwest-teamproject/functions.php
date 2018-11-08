<?php

if ( ! function_exists('cl_artiest') ) {

    // Register Custom Post Type
    function cl_artiest() {
    
        $labels = array(
            'name'                  => 'Artiesten',
            'singular_name'         => 'Artiest',
            'menu_name'             => 'Artiest',
            'name_admin_bar'        => 'Artiest',
            'archives'              => 'Artiest archief',
            'attributes'            => 'Artiest Attributes',
            'parent_item_colon'     => 'Parent Item:',
            'all_items'             => 'All Items',
            'add_new_item'          => 'Voeg nieuwe artiest toe',
            'add_new'               => 'Nieuwe artiest',
            'new_item'              => 'Nieuwe artiest',
            'edit_item'             => 'Wijzig artiest',
            'update_item'           => 'Update artiest',
            'view_item'             => 'Toon artiest',
            'view_items'            => 'Toon artiesten',
            'search_items'          => 'Doorzoek artiest',
            'not_found'             => 'Not found',
            'not_found_in_trash'    => 'Not found in Trash',
            'featured_image'        => 'Featured Image',
            'set_featured_image'    => 'Set featured image',
            'remove_featured_image' => 'Remove featured image',
            'use_featured_image'    => 'Use as featured image',
            'insert_into_item'      => 'Insert into item',
            'uploaded_to_this_item' => 'Uploaded to this item',
            'items_list'            => 'Artiest lijst',
            'items_list_navigation' => 'Artiest lijst navigation',
            'filter_items_list'     => 'Filter artiest lijst',
        );
        $args = array(
            'label'                 => 'Artiest',
            'description'           => 'Artiest',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type( 'artiest', $args );
    
    }
    add_action( 'init', 'cl_artiest', 0 );
    
    }

    if ( ! function_exists('cl_zaal') ) {

        // Register Custom Post Type
        function cl_zaal() {
        
            $labels = array(
                'name'                  => _x( 'Zalen', 'Post Type General Name', 'text_domain' ),
                'singular_name'         => _x( 'zaal', 'Post Type Singular Name', 'text_domain' ),
                'menu_name'             => __( 'Zaal', 'text_domain' ),
                'name_admin_bar'        => __( 'Zaal', 'text_domain' ),
                'archives'              => __( 'Zaal archief', 'text_domain' ),
                'attributes'            => __( 'Zaal Attributes', 'text_domain' ),
                'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                'all_items'             => __( 'All Items', 'text_domain' ),
                'add_new_item'          => __( 'Voeg nieuwe zaal toe', 'text_domain' ),
                'add_new'               => __( 'Nieuwe zaal', 'text_domain' ),
                'new_item'              => __( 'Nieuwe zaal', 'text_domain' ),
                'edit_item'             => __( 'Wijzig zaal', 'text_domain' ),
                'update_item'           => __( 'Update zaal', 'text_domain' ),
                'view_item'             => __( 'Toon zaal', 'text_domain' ),
                'view_items'            => __( 'Toon zalen', 'text_domain' ),
                'search_items'          => __( 'Doorzoek zaal', 'text_domain' ),
                'not_found'             => __( 'Not found', 'text_domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                'featured_image'        => __( 'Featured Image', 'text_domain' ),
                'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                'items_list'            => __( 'Zaal lijst', 'text_domain' ),
                'items_list_navigation' => __( 'Zaal lijst navigation', 'text_domain' ),
                'filter_items_list'     => __( 'Filter zaal lijst', 'text_domain' ),
            );
            $args = array(
                'label'                 => __( 'zaal', 'text_domain' ),
                'description'           => __( 'zaal', 'text_domain' ),
                'labels'                => $labels,
                'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
                'hierarchical'          => false,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 5,
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => true,
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'capability_type'       => 'page',
                'show_in_rest'          => true,
            );
            register_post_type( 'zaal', $args );
        
        }
        add_action( 'init', 'cl_zaal', 0 );
        
        }

        if ( ! function_exists('cl_concert') ) {

            // Register Custom Post Type
            function cl_concert() {
            
                $labels = array(
                    'name'                  => 'Concerten',
                    'singular_name'         => 'Concert',
                    'menu_name'             => 'Concert',
                    'name_admin_bar'        => 'Concert',
                    'archives'              => 'Concert archief',
                    'attributes'            => 'Concert Attributes',
                    'parent_item_colon'     => 'Parent Item:',
                    'all_items'             => 'All Items',
                    'add_new_item'          => 'Voeg nieuw concert toe',
                    'add_new'               => 'Nieuw concert',
                    'new_item'              => 'Nieuw concert',
                    'edit_item'             => 'Wijzig concert',
                    'update_item'           => 'Update concert',
                    'view_item'             => 'Toon concert',
                    'view_items'            => 'Toon concerten',
                    'search_items'          => 'Doorzoek concert',
                    'not_found'             => 'Not found',
                    'not_found_in_trash'    => 'Not found in Trash',
                    'featured_image'        => 'Featured Image',
                    'set_featured_image'    => 'Set featured image',
                    'remove_featured_image' => 'Remove featured image',
                    'use_featured_image'    => 'Use as featured image',
                    'insert_into_item'      => 'Insert into item',
                    'uploaded_to_this_item' => 'Uploaded to this item',
                    'items_list'            => 'Concert lijst',
                    'items_list_navigation' => 'Concert lijst navigation',
                    'filter_items_list'     => 'Filter concert lijst',
                );
                $args = array(
                    'label'                 => 'Concert',
                    'description'           => 'Concert',
                    'labels'                => $labels,
                    'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => true,
                    'menu_position'         => 5,
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => true,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'page',
                    'show_in_rest'          => true,
                );
                register_post_type( 'concert', $args );
            
            }
            add_action( 'init', 'cl_concert', 0 );
            
            }
?>