<?php
// echo $_SERVER['REQUEST_URI'];
$title="ECFMG News | ";
$pageHeading2 = "News";
$sidebar = "sidebar";
$description = "";
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-header.php";
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-menu.php"; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-four-fifths">
        <div class="content is-medium">
<h2><?php the_archive_title(); ?></h2>
<div><?php
/* if the category has a description, it will print here */
if ( '' != get_the_archive_description() ) { echo esc_html( get_the_archive_description() ); } ?></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php include ($_SERVER['DOCUMENT_ROOT']) . "/elements/page_top.php"; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div><!-- content-->
</div><!-- column is-four-fifths -->
<div class="column is-one-fifth">
<?php get_sidebar(); ?>
</div><!-- column is-one-fifth -->
</div><!-- columns -->
</section>
<?php
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-footer.php";