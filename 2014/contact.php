<?php
  $header = "default";
  $canonical = "contact";
  $title = "Get in touch - Santz";
  $description = "I am available for freelance work. Get in touch and let's discuss your next project.";

  include('includes/head.php');
?>

<div id="pjaxable" class="pjaxable">

  <?php include('includes/header.php'); ?>

  <section id="content" class="content">
    <div class="content-inner">

      <div class="container">
        <nav class="container-navigation">
          <a class="btn-square" data-pjax href="/old/">
            <i class="sprite spr-icon-24dp spr-tiles-000"></i>
          </a>
        </nav>
        <div class="mailbox">
          <h1 class="xl">Email me</h1>
          <a class="colorize" href="mailto:santiago@santz.co">santiago@santz.co</a>
        </div>
        <form id="contactFormAlt" name="contactFormAlt" class="contact-form" action="batch/mailer.php" method="post">
          <fieldset>
            <div class="form-head">
              <h3 class="xs">Or fill out the form</h3>
            </div>
            <div class="form-group">
              <label for="cfName">Name</label>
              <input id="cfName" name="cfName" class="form-control" placeholder="Santiago Baigorria">
            </div>
            <div class="form-group">
              <label for="cfEmail">Email</label>
              <input id="cfEmail" name="cfEmail" class="form-control" placeholder="santiago@santz.co" type="email">
            </div>
            <div class="form-row-2cols clearfix">
              <div class="form-group">
                <label for="cfBudget">Budget</label>
                <input id="cfBudget" name="cfBudget" class="form-control" placeholder="$0" pattern="[0-9]*">
              </div>
              <div class="form-group">
                <label for="cfAntispam">Antispam</label>
                <input id="cfAntispam" name="cfAntispam" class="form-control" placeholder="1 + 1 = ?" pattern="[0-9]*">
              </div>
            </div>
            <div class="form-group">
              <label for="cfMessage">Message</label>
              <textarea id="cfMessage" name="cfMessage" class="form-control" placeholder="Start typing..."></textarea>
            </div>
            <div class="form-foot clearfix">
              <button class="btn-circle btn-unstyled" type="submit">
                <i class="sprite spr-icon-24dp spr-arrow-right-000"></i>
                <i class="sprite spr-icon-24dp spr-tick-fff"></i>

                <div class="loading">
                  <div class="loading-inner">
                    <div class="ball-first"></div>
                    <div class="ball-second"></div>
                    <div class="ball-third"></div>
                  </div>
                </div>
              </button>
            </div>
          </fieldset>
        </form>
      </div>

      <script type="onload">
        loadContactAlt();
      </script>

    </div>
  </section>

</div>

<?php include('includes/mobile.php'); ?>

<?php include('includes/contact.php'); ?>

<?php include('includes/foot.php'); ?>

</body>
</html>