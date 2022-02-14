<?php
//remove link to w.s.org (wordpress)
add_action( 'init', 'remove_dns_prefetch' );
function  remove_dns_prefetch () {
   remove_action( 'wp_head', 'wp_resource_hints', 2, 99 );
}

//remove emoji css and js code
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


//add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
    //load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
    //add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    //add_theme_support( 'responsive-embeds' );
    //add_theme_support( 'automatic-feed-links' );
    //add_theme_support( 'html5', array( 'search-form' ) );
    //add_theme_support( 'woocommerce' );
    //global $content_width;
    //if ( !isset( $content_width ) ) { $content_width = 1920; }
    //register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
}

//add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
    if ( $title == '' ) {
        return '...';
    } else {
        return $title;
    }
}
add_filter( 'nav_menu_link_attributes', 'blankslate_schema_url', 10 );
function blankslate_schema_url( $atts ) {
    $atts['itemprop'] = 'url';
    return $atts;
}

add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
    if ( !is_admin() ) {
        return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
    }
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
    if ( !is_admin() ) {
        global $post;
        return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
    }
}
add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
    unset( $sizes['medium_large'] );
    unset( $sizes['1536x1536'] );
    unset( $sizes['2048x2048'] );
    return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
    register_sidebar( array(
    'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}
