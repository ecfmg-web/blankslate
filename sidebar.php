<?php if ( is_active_sidebar( 'primary-widget-area' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<div class="rightmenu news">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</div>
	</aside><!-- .sidebar .widget-area -->
<?php endif;

/*

if ( is_active_sidebar( 'primary-widget-area' ) ) :
dynamic_sidebar( 'primary-widget-area' );
endif; ?>

$query = new WP_Query( $args );
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        // do stuff
    }
    wp_reset_postdata();
} else {
    // none were found
}
*/

?>