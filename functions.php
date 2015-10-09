<?php

/**
 * Enque Styles.
 *
 */
function child_scripts_styles() {
    
	/* ===== Load Bootstrap ===== */
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', array(), '3.3.5' );

    /* ===== Load our main stylesheet ===== */
    wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

    /* ===== Custom Styles ===== */
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri().'/css/custom.css', array(), '1.0' );

    /* ===== Font Awesome ===== */
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.min.css', array(), '4.4' );

    /* ===== Custom Scripts ===== */
    // wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0.0', true );

    /* ===== Bootstrap Script ===== */
    wp_enqueue_script ( 'bootstrap-script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );


    if ( is_404() ) {
        /* ===== 404 ===== */
         wp_enqueue_style( 'error404', get_stylesheet_directory_uri().'/css/error404.css', array(), '4.4' );

    }

}

add_action( 'wp_enqueue_scripts', 'child_scripts_styles' );


/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function indulgenow_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area 1', 'twentyfifteen' ),
        'id'            => 'footer-widget-1',
        'description'   => __( 'Add widgets here to appear in your Footer column 1.', 'twentyfifteen' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div></aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2><div style="display: none;">',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Area 2', 'twentyfifteen' ),
        'id'            => 'footer-widget-2',
        'description'   => __( 'Add widgets here to appear in your Footer column 2.', 'twentyfifteen' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div></aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2><div style="display: none;">',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Area 3', 'twentyfifteen' ),
        'id'            => 'footer-widget-3',
        'description'   => __( 'Add widgets here to appear in your Footer column 3.', 'twentyfifteen' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div></aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2><div style="display: none;">',
    ) );

}

add_action( 'widgets_init', 'indulgenow_widgets' );


/**
 * UnRegister sidebar area.
 *
 * @since Twenty Fifteen 1.0
 *
 */
function remove_some_widgets(){

    // Unregister some of the TwentyTen sidebars
}

add_action( 'widgets_init', 'remove_some_widgets', 11 );


/**
 * UnRegister sidebar area.
 *
 * @since Twenty Fifteen 1.0
 *
 */
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version

remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );


/**
 *
 * Remove WordPress Admin Bar CSS
 *
 */
add_filter( 'show_admin_bar', '__return_false' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');



/**
 *
 * Remove jQuery
 *
 */
function de_script() {
    wp_dequeue_script( 'jquery' );
    wp_deregister_script( 'jquery' );

}
add_action( 'wp_print_scripts', 'de_script', 100 );



   
?>