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
<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Not Found', 'blankslate' ); ?></h1>

<div class="entry-content" itemprop="mainContentOfPage">
<p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</div><!-- content-->
</div><!-- column is-four-fifths -->
<div class="column is-one-fifth">
<?php get_sidebar(); ?>
</div><!-- column is-one-fifth -->
</div><!-- columns -->
</section>
<?php
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-footer.php";