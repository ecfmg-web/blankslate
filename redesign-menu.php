<section class="section logoSection">
    <div class="container">
      <div class="columns is-gapless">
        <div class="column is-one-fifth">
          <div class="content mobileCenter">
            <a href="/"
              ><img src="/images/intealth-ecfmg.png" alt="Intealth ECFMG"
            /></a>
          </div>
        </div>
        <div class="column is-one-third">
          <div class="content">
            <p>Educational Commission for Foreign Medical Graduates</p>
          </div>
        </div>
        <div class="addSearchWrapper column is-two-fifths">
          <span class="is-pulled-right">
            <form
              method="get"
              action="https://www.faimer.org/addsearch-results.php"
            >
              <input
                type="text"
                name="addsearch"
                placeholder="Search ..."
                class="addsearch"
                title="addsearch"
              />

              <input
                type="submit"
                class="addsearchResultsSubmit button is-primary is-small"
                title="addsearch"
                value="Search"
              />
            </form>
          </span>
        </div>
      </div>
    </div>
  </section>
  <section class="section topSection">
    <div class="container">
      <?php include 'redesign-navbar.php';?>
    </div>
  </section>
  <section class="section has-background-secondary p-4">
    <div class="container">
      <div class="columns">
        <div class="column is-full">
          <?php
          // if on the news landing page, hard code nav ul li with NO POST TITLE in the breadcrumb
          if ($_SERVER['REQUEST_URI']==='/maintenance/') { ?>
          <nav class='breadcrumb' aria-label='breadcrumbs'>
              <ul>
                <li><a href='/'>Home</a></li>
                <li class='is-active'><a href='/maintenance/' aria-current='page'>News</a></li>
              </ul>
          </nav>
          <?php
          } elseif (strpos($_SERVER['REQUEST_URI'],'maintenance/')) {
          // if news AND on a single post, hard code nav ul li elements WITH POST TITLE in the breadcrumb
            ?>
            <nav class='breadcrumb' aria-label='breadcrumbs'>
              <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='/maintenance/'>News</a></li>
                <li class='is-active'>
                  <a href='#' aria-current='page'><?php the_title(); ?></a>
                </li>
              </ul>
          </nav>
          <?php // if NOT NEWS, use controller files $breadcrumb
          } else {
            echo $breadcrumb;
          } ?>
        </div>
      </div>
      <div class="columns">
        <div class="column flexAuto">
          <div class="content">
            <h2 class="h1 brandIntro"><?php echo $pageHeading2; ?></h2>
          </div>
        </div>
        <div class="column flexAuto">
          <div class="content">