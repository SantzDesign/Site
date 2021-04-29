<?php
  $header = "default";
  $canonical = "boilerplate";
  $title = "The boilerplate - Santz";
  $description = "This brief article explains why I designed my own HTML5 front-end boilerplate instead of using existent ones.";

  include('includes/head.php');
?>

<div id="pjaxable" class="pjaxable">

  <?php include('includes/header.php'); ?>

  <section id="content" class="content">
    <div class="content-inner">

      <div class="container">
        <nav class="container-navigation">
          <a class="btn-square" data-pjax href="/old/blog">
            <i class="sprite spr-icon-24dp spr-arrow-left-000"></i>
          </a>
        </nav>
        <div class="article-head-color purple">
          <h1 class="xl">Santz Boilerplate</h1>
          <time>November 10 2014 (edited)</time>
        </div>
        <article class="article">
          <div class="article-content">
            <p><b>W</b>hy did I make my own boilerplate? There are 3 main reasons for it... For starters, I believe in 100% custom code. I like to know every line of code behind my development. I see this as a way of keeping things clean and to the point.</p>
            <p>Additionally, I think that great (and XL) boilerplates such as Bootstrap and Foundation are just too much. Both include tons of code that you'll probably never use, even when you compile a custom build. When you don't know your code, there's a higher chance things get messy.</p>
            <p>Third and last, the boilerplate contains ONLY code that's ALWAYS necessary on my regular type of project. I designed it for websites but it also meets 90% of requirements for an HTML5 web app.</p>
            <h2>The contents</h2>
            <p>The boilerplate's contents are super simple... In it, you will find a basic folder structure, featuring folders for SASS/CSS, JS, images, fonts, and includes.</p>
            <p>Includes are the head, the header, the footer and the foot of the documents.</p>
            <p>I use the Bourbon.io Sass mixin library instead of plain CSS, and SASS structuration is based on Bootstrap's assemblage.</p>
            <p>The head file is a core part of the boilerplate. It contains the SEO related meta tags, Facebook's Open Graph Protocol, Twitter Cards, the responsive enabling meta tag, favicons and Apple touch icons, and other not-to-relevant code snippets.</p>
            <p>And this is pretty much it.</p>
            <h2>The workflow</h2>
            <p>Workflow is ultra-simple. Step one, build desktop sizes, step two, make mobile adaptations, step three deliver or deploy.</p>
            <p>A question I get a lot too is “Why not mobile first?”. Okay. I'd like to assert my opinion on the matter (Jaja)... First, I consider performance/optimization crucial. Developments should always take advantage of hardware acceleration and other high-performance practices (when possible), allowing smoother animations, enhanced performance and, therefore, better UX. Any resource that impacts performance must be taken care of, and always acknowledging device limitations. On <a href="http://zurb.com/word/mobile-first" target="_blank">Zurb's article</a>, they state that building from the top-to-bottom is inconvenient because de-evolving a site usually leads to overloading the mobile device. Although this might be a fact, since many websites do work awfully on mobile, it does not mean that desktop to mobile is the wrong/inadequate approach. Bad performance is the sequel of poor coding. Properly coded desktop first websites perform perfectly on mobile.</p>
            <p>I prefer desktop first because it's so much easier. I find it more logical to shrink a site than to start small and enlarge it. I'm not saying I can't do it, but if it's my choice, I'll go with desktop first, and always, no matter what, keep a close eye on performance.</p>
            <h2>Credits</h2>
            <p>Inspiration... Dave Gamache, thank you for Skeleton. Mark Otto and Jacob, thank you for Bootstrap. Thoughtbot team, thank you for Bourbon.io. And Robert (my mentor at Aerolab), thank you for the rest.</p>
          </div>
          <div class="article-foot">
            <div class="share">
              <span>Share on</span>
              <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://santz.co/boilerplate" target="_blank"></a>
              <a class="icon-twitter" href="https://twitter.com/home?status=https://santz.co/boilerplate" target="_blank"></a>
            </div>
            <div class="fork">
              <span>Fork on</span>
              <a class="icon-github" href="https://github.com/SantzDesign/Santz" target="_blank"></a>
            </div>
          </div>
        </article>
      </div>
    </div>

  </section>

</div>

<?php include('includes/mobile.php'); ?>

<?php include('includes/contact.php'); ?>

<?php include('includes/foot.php'); ?>

</body>
</html>