<?php
  $header = "home";
  $canonical = "";
  $title = "Internal server error - Santiago Baigorria";
  $description = "The server encountered a problem and could not complete your request.";

  include('includes/head.php');
?>



<div class="error-page">
  <div class="error-page-inner">

    <div class="error-bg error-bg--500">
      <div class="line">
        <div class="interruption">
          <div class="cross"></div>
        </div>
        <div class="content-block"></div>
      </div>
    </div>

    <header class="header is-white">
      <h1 class="santz"><a href="/">Santz</a></h1>
      <div class="back-to-home">
        <a href="/">back to home</a>
      </div>
    </header>

    <div class="error-notice">

      <div class="error-notice-inner">
        <h2 class="error-code">Error 500</h2>
        <p class="error-caption error-caption--500">Internal server error. Sorry about this.</p>
      </div>

    </div>

    <a href="/" class="back-button">
      <span class="back-button-arrow sprite spr-xs-arrow-left-w"></span>
    </a>

  </div>
</div>



<?php include('includes/footer.php'); ?>























