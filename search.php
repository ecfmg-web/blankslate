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
<?php
if ( have_posts() ) : ?>
<header class="header">
<h2 class="entry-title" itemprop="name"><?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h2>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php include ($_SERVER['DOCUMENT_ROOT']) . "/elements/page_top.php"; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
<?php endif; ?>
</div><!-- content-->
</div><!-- column is-four-fifths -->
<div class="column is-one-fifth">
<?php get_sidebar(); ?>
</div><!-- column is-one-fifth -->
</div><!-- columns -->
</section>
<?php
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-footer.php";