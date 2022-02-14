<?php
$title="ECFMG News | ";
$title = "Careers";
$sidebar = "sidebar";
$description = "";
$breadcrumb = "<nav class='breadcrumb' aria-label='breadcrumbs'>
    <ul>
    <li><a href='/'>Home</a></li>
    <li class='is-active'>
        <a href='#' aria-current='page'>News</a>
    </li>
    </ul>
</nav>";
$pageHeading2 = "News";
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
      <div class="column is-full">
        <div class="content is-medium">


<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
get_template_part( 'nav', 'below' ); ?>
</div><!-- content-->
</div><!-- column -->
</div><!-- columns -->
</section>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="content">
          <p>
            [Last update:
            <?php echo $lastupdated; ?>]
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include ($_SERVER['DOCUMENT_ROOT']) . "/redesign-footer.php";