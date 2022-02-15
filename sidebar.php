<div class="content sidebar">
    <ul>
<?php
if ( is_active_sidebar( 'primary-widget-area' ) ) :
dynamic_sidebar( 'primary-widget-area' );
endif; ?>
</ul>
</div>

<?php

/*
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