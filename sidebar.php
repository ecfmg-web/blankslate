<section>
<?php get_search_form(); ?>
</section>
<section>
<?php
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        // do stuff
    }
    wp_reset_postdata();
} else {
    // none were found
} ?>
</section>
<section>
<?php wp_get_archives(); ?>
</section>

<div class="content">
    <ul class="menu-list">
<?php// if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

<?php// dynamic_sidebar( 'primary-widget-area' ); ?>
<?php// endif; ?>
    </ul>
</div><!-- content -->