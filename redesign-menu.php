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
          <?php echo $breadcrumb; ?>
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