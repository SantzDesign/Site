<?php
  $header = "home";
  $canonical = "";
  $title = "Santz - UI designer and front-end developer";
  $description = "I'm Santiago Baigorria, UI designer and front-end developer from Benavídez, Argentina. I focus on user experience, performance, organic SEO and detail.";

  include('includes/head.php');
?>

<div id="pjaxable" class="pjaxable">

  <?php include('includes/header.php'); ?>

  <div class="content">
    <div class="content-inner">

      <section id="tiles" class="tiles">
        <div class="tilerow-01">
          <div class="tilecell-mazda">
            <?php include('tiles/tile-mazda.php'); ?>
          </div>
          <div class="tilecell-123seguro">
            <?php include('tiles/tile-123seguro.php'); ?>
          </div>
          <div class="tilecell-absolutart">
            <?php include('tiles/tile-absolutart.php'); ?>
          </div>
        </div>

        <div class="tilerow-02">
          <div class="tilecell-lautraman">
            <?php include('tiles/tile-lautraman.php'); ?>
          </div>
          <div class="tilecell-mbvarq">
            <?php include('tiles/tile-mbvarq.php'); ?>
          </div>
          <div class="tilecell-aerolab">
            <?php include('tiles/tile-aerolab.php'); ?>
          </div>
        </div>

        <div class="tilerow-03">
          <div class="tilecell-boilerplate">
            <?php include('tiles/tile-boilerplate.php'); ?>
          </div>
          <div class="tilecell-ucda">
            <?php include('tiles/tile-ucda.php'); ?>
          </div>
          <div class="tilecell-msac">
            <?php include('tiles/tile-msac.php'); ?>
          </div>
        </div>

        <div class="tilerow-04">
          <div class="tilecell-jar">
            <?php include('tiles/tile-jar.php'); ?>
          </div>
          <div class="tilecell-rate">
            <?php include('tiles/tile-rate.php'); ?>
          </div>
          <div class="tilecell-about">
            <?php include('tiles/tile-about.php'); ?>
          </div>
          <div class="tilecell-social">
            <?php include('tiles/tile-social.php'); ?>
          </div>
        </div>
      </section>

      <script type="onload">
        loadHome();
      </script>

    </div>
  </div>

</div>

<?php include('includes/mobile.php'); ?>

<?php include('includes/contact.php'); ?>

<?php include('includes/foot.php'); ?>

</body>
</html>