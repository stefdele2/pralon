<?php
    /* In dit bestand komen onze theme specifieke functies */
    function register_menu_locations() {
        register_nav_menus(
          array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'frontpage-top-menu' => __( 'Front Page Top' ),
            '404-menu' => __( '404 Menu' )
          )
        );
      }
      add_action( 'init', 'register_menu_locations' );

      function register_sidebar_locations() {
          /* Register the 'primary' sidebar. */
          register_sidebar(
              array(
                  'id'            => 'primary-sidebar',
                  'name'          => __( 'Primary Sidebar' ),
                  'description'   => __( 'A short description of the sidebar.' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget'  => '</div>',
                  'before_title'  => '<h3 class="widget-title">',
                  'after_title'   => '</h3>',
              )
          );


          register_sidebar(
              array(
                  'id'            => 'mediabuttons',
                  'name'          => __( 'Media Buttons' ),
                  'description'   => __( 'A short description of the sidebar.' ),
                  'before_widget' => '<div id="%1$s" class="col coltext">',
                  'after_widget'  => '</div>',
                  'before_title'  => '<h3 class="widget-title">',
                  'after_title'   => '</h3>',
              )
          );
      }
      add_action( 'widgets_init', 'register_sidebar_locations' );

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

}





add_theme_support( 'custom-logo' );



function custom_post_type_praline() {
  $labels = array(
    'name'               => _x( 'praline', 'post type general name' ),
    'singular_name'      => _x( 'praline item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Praline' ),
    'edit_item'          => __( 'Edit praline item' ),
    'new_item'           => __( 'New praline item' ),
    'all_items'          => __( 'All praline items' ),
    'view_item'          => __( 'View praline item' ),
    'search_items'       => __( 'Search praline items' ),
    'not_found'          => __( 'No praline item found' ),
    'not_found_in_trash' => __( 'No praline item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'praline'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our praline items specific data',
    'public'        => true,
    'menu_position' => 5,
	'menu_icon'     => 'dashicons-book',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'praline', $args );
  
}
add_action( 'init', 'custom_post_type_praline' );


function taxonomies_praline() {
  $labels = array(
    'name'              => _x( 'praline Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'praline Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search praline Categories' ),
    'all_items'         => __( 'All praline Categories' ),
    'parent_item'       => __( 'Parent praline Category' ),
    'parent_item_colon' => __( 'Parent praline Category:' ),
    'edit_item'         => __( 'Edit praline Category' ), 
    'update_item'       => __( 'Update praline Category' ),
    'add_new_item'      => __( 'Add New praline Category' ),
    'new_item_name'     => __( 'New praline Category' ),
    'menu_name'         => __( 'praline Categories' )
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'praline_category', 'praline', $args );
}
add_action( 'init', 'taxonomies_praline', 0 );





function load_my_script(){
    wp_register_script( 
        'my_script', 
        get_template_directory_uri() . '/main.js', 
        array( 'jquery' )
    );
    wp_enqueue_script( 'my_script' );
}
add_action('wp_enqueue_scripts', 'load_my_script');





if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Secondary Image',
'id' => 'secondary-image',
'post_type' => 'praline'
 ) );

 }

function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );






add_theme_support( 'custom-logo' );