<?php $args = array(
'prev_text' => sprintf( esc_html__( 'older %s', 'blankslate' ), '<span class="meta-nav">&rarr;</span>' ),
'next_text' => sprintf( esc_html__( '%s previous', 'blankslate' ), '<span class="meta-nav">&larr;</span>' )
);
the_posts_navigation( $args );