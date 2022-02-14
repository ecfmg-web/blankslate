<?php
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-header.php";
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-menu.php";
if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
get_template_part( 'nav', 'below' );
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-footer.php";