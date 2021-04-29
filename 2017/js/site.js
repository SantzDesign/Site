$(function() {



  setTimeout(function() {
    $('#loading').addClass('is-loaded');
  }, 3000);



  FastClick.attach(document.body);



  $('#projectSlider').glide({
    paddings: 0,
    autoplay: 8000
    // autoheight: true
  });



  $('a[data-scroll]').smoothScroll();

  $('#menu .menu-button').click(function(event) {
    event.preventDefault();

    $('#menu').toggleClass('is-active');
  });



});