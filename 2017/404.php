<?php
  $header = "home";
  $canonical = "";
  $title = "Page not found - Santiago Baigorria";
  $description = "I couldn't find the page you were looking for.";

  include('includes/head.php');
?>



<div class="error-page">
  <div class="error-page-inner">

    <div class="error-bg error-bg--404"></div>

    <header class="header is-white">
      <h1 class="santz"><a href="/">Santz</a></h1>
      <div class="back-to-home">
        <a href="/">back to home</a>
      </div>
    </header>

    <div class="error-notice">

      <div class="error-notice-inner">
        <h2 class="error-code">Code 404</h2>
        <p class="error-caption">You're nowhere.</p>
      </div>

    </div>

    <a href="/" class="back-button">
      <span class="back-button-arrow sprite spr-xs-arrow-left-w"></span>
    </a>

  </div>
</div>



<?php include('includes/footer.php'); ?>























