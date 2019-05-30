<?php

require_once 'class-wp-bootstrap-navwalker.php';

function wpb_widgets_init() {
    // header widget 
    register_sidebar( array(
        'name'          => 'Accessibility Header Widget Area',
        'id'            => 'accessibility-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title" style="display: none;" aria-hidden="true">',
        'after_title'   => '</h2>',
    ) );


    // footer widget
    register_sidebar( array(
        'name'          => 'Footer Widget',
        'id'            => 'footer_widget',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="footer-widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );


function fire_theme_enqueue_scripts() {
    // all styles
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), 20141119 );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri() . '/assets/css/swiper.min.css', array(), 20141119 );

    // all scripts
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'spwiper-js', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'fire_theme_enqueue_scripts' );





// logo of the website 
function fire_header_logo() {
	$defaults = array(
		'default-image'          => get_template_directory_uri() . '/assets/images/header.jpg',
		'width'                  => 400,
		'height'                 => 87,
		'flex-height'            => false,
		'flex-width'             => false,
		'uploads'                => true,
		'random-default'         => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action('after_setup_theme', 'fire_header_logo');



// header menu and footer menu
function fire_menu_header_foot() {

    // the register_nav_menus call is what you should copy into your own
    // themes setup function.
    register_nav_menus(
        array(
            'footer_nav' => __( 'Footer Menu', 'fire' ), // example of adding a menu location
            'top_menu' => __( 'Top Menu', 'fire' ), // we will be using this top_menu location
        )
    );

}
// this will hook the setup function in after other setup actions.
add_action( 'after_setup_theme', 'fire_menu_header_foot' );


// widget bar 
function fire_sidebar_widgets_init() {

	register_sidebar( array(
		'name'          => 'Primary Sidebar',
		'id'            => 'fire_sidebar',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-content">',
	) );

}
add_action( 'widgets_init', 'fire_sidebar_widgets_init' );




// redirect to somepage for subscribers
function login_redirect( $redirect_to, $requested_redirect_to, $user ) {
    if ( isset($user->roles) && is_array($user->roles) ) {

        if ( in_array('subscriber', $user->roles) ) {

            if ( $requested_redirect_to && admin_url() != $requested_redirect_to ) {
                $redirect_to = $requested_redirect_to;
            } else {
                $redirect_to =  home_url();
            }

        }
    }
    return $redirect_to;
}





//custom post type for 8 modules
function create_posttype() {
	$labels = array(
		'name'               => _x( 'Chapters', 'post type general name', 'fire' ),
		'singular_name'      => _x( 'Chapter', 'post type singular name', 'fire' ),
		'menu_name'          => _x( 'Chapters', 'admin menu', 'fire' ),
		'name_admin_bar'     => _x( 'Chapter', 'add new on admin bar', 'fire' ),
		'add_new'            => _x( 'Add New', 'chapter', 'fire' ),
		'add_new_item'       => __( 'Add New Chapter', 'fire' ),
		'new_item'           => __( 'New Chapter', 'fire' ),
		'edit_item'          => __( 'Edit Chapter', 'fire' ),
		'view_item'          => __( 'View Chapter', 'fire' ),
		'all_items'          => __( 'Chapters', 'fire' ),
		'search_items'       => __( 'Search Chapters', 'fire' ),
		'parent_item_colon'  => __( 'Parent Chapters:', 'fire' ),
		'not_found'          => __( 'No chapters found.', 'fire' ),
		'not_found_in_trash' => __( 'No chapters found in Trash.', 'fire' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'fire' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=modules',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'chapter' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

  register_post_type( 'chapters', $args );
}
add_action( 'init', 'create_posttype' );











// Our custom post type function
function Facilities_posttype() {




	$labels = array(
        'name'                => _x( 'Facilities', 'Post Type General Name', 'fire' ),
        'singular_name'       => _x( 'Facility', 'Post Type Singular Name', 'fire' ),
        'menu_name'           => __( 'Facilities', 'fire' ),
        'parent_item_colon'   => __( 'Parent Facility', 'fire' ),
        'all_items'           => __( 'All Facilities', 'fire' ),
        'view_item'           => __( 'View Facility', 'fire' ),
        'add_new_item'        => __( 'Add New Facility', 'fire' ),
        'add_new'             => __( 'Add New', 'fire' ),
        'edit_item'           => __( 'Edit Facility', 'fire' ),
        'update_item'         => __( 'Update Facility', 'fire' ),
        'search_items'        => __( 'Search Facility', 'fire' ),
        'not_found'           => __( 'Not Found', 'fire' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'fire' ),
    );

    $args = array(
        'label'               => __( 'facilities', 'fire' ),
        'description'         => __( 'Facility news and reviews', 'fire' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',

    );

    register_post_type( 'facilities', $args );
 
    add_theme_support( 'post-thumbnails', array( 'facilities' ) );
}
// Hooking up our function to theme setup
add_action( 'init', 'Facilities_posttype', 0 );






function news_posttype() {




    $labels = array(
        'name'                => _x( 'News', 'Post Type General Name', 'fire' ),
        'singular_name'       => _x( 'News', 'Post Type Singular Name', 'fire' ),
        'menu_name'           => __( 'News', 'fire' ),
        'parent_item_colon'   => __( 'Parent News', 'fire' ),
        'all_items'           => __( 'All News', 'fire' ),
        'view_item'           => __( 'View News', 'fire' ),
        'add_new_item'        => __( 'Add New News', 'fire' ),
        'add_new'             => __( 'Add New', 'fire' ),
        'edit_item'           => __( 'Edit News', 'fire' ),
        'update_item'         => __( 'Update News', 'fire' ),
        'search_items'        => __( 'Search News', 'fire' ),
        'not_found'           => __( 'Not Found', 'fire' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'fire' ),
    );

    $args = array(
        'label'               => __( 'news', 'fire' ),
        'description'         => __( 'News and reviews', 'fire' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',

    );

    register_post_type( 'news', $args );
 
    add_theme_support( 'post-thumbnails', array( 'news' ) );
}
// Hooking up our function to theme setup
add_action( 'init', 'news_posttype', 0 );

add_theme_support( 'post-thumbnails' );






// flush_rewrite_rules(false);

?>
