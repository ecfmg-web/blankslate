<section class="section logoSection">
  <div class="container">
    <div class="columns is-vcentered">
      <div class="column is-one-third">
        <div class="content mobileCenter">
          <a href="/"><img src="/images/intealth-ecfmg-redesign.png" alt="Intealth ECFMG" /></a>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="content is-medium">
          <p><b>Educational Commission for Foreign Medical Graduates</b></p>
        </div>
      </div>
      <div class="addSearchWrapper column is-two-fifths">
        <span class="is-pulled-right">
          <form method="get" action="https://www.ecfmg.org/addsearch-results2.php">
            <label for="addSearchInput" class="is-sr-only">Search</label><input type="text" id="addSearchInput" name="addsearch" placeholder="Search ..." class="addsearch" title="addsearch" />

            <input type="submit" class="addsearchResultsSubmit button is-primary is-small" title="addsearch" value="Search" />
          </form>
        </span>
      </div>
    </div>
  </div>
</section>
<section class="section topSection">
  <div class="container">
    <?php include 'redesign-navbar.php'; ?>
  </div>
</section>
<section class="section has-background-secondary p-4">
  <div class="container">
    <div class="columns">
      <div class="column is-full">
        <?php echo $breadcrumb; ?>
      </div>
    </div>
    <div class="columns has-heading-menu">
      <div class="column flexAuto">
        <div class="content">
          <h2 class="h1 brandIntro"><?php echo $pageHeading2; ?></h2>
        </div>
      </div>
      <div class="column flexAuto">
        <div class="content">