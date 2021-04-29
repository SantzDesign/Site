<?php
  $header = "default";
  $canonical = "blog";
  $title = "Blog - Santz";
  $description = "Welcome to my blog. I sometimes write stuff to share my experience, point of views and whatever I think it might be worth writing about...";

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
        <ul class="list-unstyled">
          <li class="listing">
            <h2><a data-pjax href="/thank-you-aerolab">Thank you Aerolab</a></h2>
            <time>June 20 2015</time>
            <a class="colorize" data-pjax href="/old/thank-you-aerolab">Read</a>
          </li>
          <li class="listing">
            <h2><a data-pjax href="/boilerplate">Santz Boilerplate</a></h2>
            <time>November 10 2014 (edited)</time>
            <a class="colorize" data-pjax href="/old/boilerplate">Read</a>
          </li>
        </ul>
        <div class="pagination clearfix">
          <span class="count">Page 1 of 1</span>
          <!--<a data-pjax class="btn btn-11px btn-lightgray btn-rounded" href="#">Next page</a>-->
        </div>
      </div>

    </div>
  </section>

</div>

<?php include('includes/mobile.php'); ?>

<?php include('includes/contact.php'); ?>

<?php include('includes/foot.php'); ?>

</body>
</html>