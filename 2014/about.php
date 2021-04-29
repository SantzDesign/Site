<?php
  $header = "default";
  $canonical = "about";
  $title = "About me - Santz";
  $description = "The story behind Santz... Get to know me by my real name: Santiago Baigorria, the UI designer and developer from Benavídez, Argentina!";

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
        <figure class="cover xl" style="background-image: url(images/santz.jpg);">
          <figcaption class="location">
            <i class="sprite spr-icon-24dp spr-location-fff"></i>
            <span>Costa Esmeralda</span>
          </figcaption>
        </figure>
        <article class="article">
          <div class="article-head">
            <figure class="avatar avatar-68px avatar-rounded" style="background-image: url(images/avatar/avatar-68@2x.jpg);"></figure>
            <h1 class="xl">About me</h1>
            <p>The story behind Santz</p>
          </div>
          <div class="article-content">
            <p><b>H</b>ey. My name is Santiago Baigorria, a user interface designer and developer from <a href="https://goo.gl/maps/CsmYr" target="_blank">Benavídez, Argentina</a>. This about me section attempts to explain who I am and what I do.</p>
            <p>I will also take some lines to describe myself... A bit about my hobbies, my education and my previous and current job.</p>
            <h2>Whatever</h2>
            <p>Sportswise, I must say I'm deeply in love with football (soccer). I play regularly at an amateur tournament with some of my friends. I also like hitting the gym, works great as a break from this kind of job where you spend most of your time at a desk.</p>
            <p>Somewhat needless to say, I love art and design. I really enjoy quality art that is not trapped on a screen.</p>
            <p>I also love asados (BBQs), Absolut Vodka and music (specially the ambient genre, that doesn't drive you crazy while working and it's pretty great for almost any occasion... Check out <a href="https://soundcloud.com/matoma-official" target="_blank">@matomamusic</a> btw).</p>
            <h2>Education</h2>
            <p>I made kindergarten at the Sworn College and then switched to <a href="http://www.cardenal-newman.edu" target="_blank">Cardenal Newman School</a> where I completed primary and high school.</p>
            <p>I took Cambridge's IGCSE exams and the GCE AS Level exams.</p>
            <p>Now I'm studying Business (Administración de Empresas) at the <a href="http://www.uba.ar" target="_blank">Buenos Aires University</a>.</p>
            <h2>Work</h2>
            <p>Because I started coding when I was still at school, I got my first internship (and I thank my father for it) at the age of 17, immediately after school. It lasted no more than 3 months, but it's still a nice to have experience.</p>
            <p>After that, I got my first job at a design and development agency called <a href="https://aerolab.co" target="_blank">Aerolab</a>. I invite you to check them out, THEY-ARE-AWESOME. This is their <a href="https://aerolab.co" target="_blank">website</a>, their <a href="https://dribbble.com/aerolab" target="_blank">Dribbble</a> and their <a href="https://medium.com/aerolab-stories" target="_blank">Medium blog</a>. Here, I spent 1 year and 7 months. I learned a bunch of stuff and I must admit I owe them a lot of what I know today.</p>
            <p>2014 ended and I left Aerolab to begin a freelancing career. I started a "partnership" with <a href="http://blacklion.mx" target="_blank">BlackLion</a>, a Mexican development company, and we carried out several projects together. I was also hired a couple times by <a href="http://anattadesign.com" target="_blank">Anatta Design</a>, an eCommerce design and development company from San Francisco, CA. We shared 3 projects. There were other not to relevant jobs too.</p>
            <p>Today, I'm working remotely, 6 hours a day, for a company based in Miami. I'm doing UI design and development.</p>
            <h2>What I do</h2>
            <p>I get the "Can you do this? Can you do that?" type of questions a lot. To avoid explaining myself repeatedly, I'll commit myself to explain with precision what is it that I do and what is it I don't do.</p>
            <p><strong>Design related:</strong> I only do UI (user interface) design. I also "do" basic UX (user experience), but always sticking to standards. I do not do iconography, illustration nor branding.</p>
            <p><strong>Development related:</strong> I do front-end development, and more specifically UI development. I'm the guy that builds HTML/CSS/JS templates so that afterwards, a back-end team can implement them with ease. My strongest skills are HTML/CSS (HTML5/CSS3). When dealing with JS, I limit myself to already existing solutions (almost always open-source, that have been broadly tested and are maintained by well-known developers). I usually carry out developments using my <a data-pjax href="/boilerplate">personal boilerplate</a>, that features Normalize.css, the Skeleton/Bootstrap grid, and the <a href="http://bourbon.io" target="_blank">Bourbon.io</a> Sass mixin library. I don't do any kind of back-end... I only make use of basic PHP to build the templates to make stuff easier for the back-end teams.</p>
            <p>My daily tools are Sublime Text, Adobe Photoshop, Adobe Illustrator, SourceTree, WAMP, Chrome and my iPhone. The websites I own and/or maintain are hosted on <a href="http://mediatemple.net" target="_blank">Media Temple</a> and I push changes/updates using Git hooks.</p>
            <h2>Wrap up</h2>
            <p>Thanks for reading (I hope I didn't bore you too much). You can always find me on <a href="https://twitter.com/SantzDesign" target="_blank">Twitter</a>, <a href="https://github.com/SantzDesign" target="_blank">GitHub</a>, <a href="https://instagram.com/santibaigorria" target="_blank">Instagram</a>, <a href="https://dribbble.com/Santz" target="_blank">Dribbble</a>, <a href="https://ar.linkedin.com/in/santzdesign" target="_blank">LinkedIn</a>, <a href="https://www.upwork.com/users/~01dcdbafd1d635db18" target="_blank">UpWork</a> (former oDesk); or <a class="colorize" href="mailto:santiago@santz.co" target="_blank">shoot me an email</a> to get in touch.</p>
          </div>
          <div class="article-foot">
            <div class="share">
              <span>Share on</span>
              <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://santz.co/about" target="_blank"></a>
              <a class="icon-twitter" href="https://twitter.com/home?status=https://santz.co/about" target="_blank"></a>
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