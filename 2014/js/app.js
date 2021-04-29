$(function () {

  // Home snippets
  function loadHome() {
    // Tap on home projects to visit the site
    // $('[data-overlay]').on('mouseover click', function() {
    //   $(this).toggleClass('has-active-overlay');

    //   $(this).mouseleave(function() {
    //     $(this).removeClass('has-active-overlay');
    //   });
    // });

    $('[data-overlay]').on({
      mouseenter: function() {
        $(this).addClass('has-active-overlay');
      },
      mouseleave: function() {
        $(this).removeClass('has-active-overlay');
      },
      click: function() {
        if ( $(this).hasClass('has-active-overlay') ) {
          $(this).removeClass('has-active-overlay');
        } else {
          $(this).addClass('has-active-overlay');
        }
      }
    });

    $('.tile-overlay-button .btn').click(function(event) {
      event.stopPropagation();
    });

    $(window).load(function() {
      $('#tiles').addClass('images-ready');
    });
  };

  // Home snippets
  function loadContactAlt() {
    $('#contactFormAlt').validate({
      rules: {
        cfName: 'required',
        cfEmail: {
          required: true,
          email: true
        },
        cfAntispam: {
          required: true,
          digits: true,
          range: [2, 2]
        },
        cfMessage: 'required'
      },

      errorPlacement: function(error, element) {
        return true;
      },

      errorClass: 'is-invalid',
      validClass: 'is-valid',

      submitHandler: function(form) {
        NProgress.start();
        if ( $('#contactFormAlt').hasClass('is-sending') ) { return false; }
        $('#contactFormAlt').addClass('is-sending');
        $('#contactFormAlt .btn-circle').addClass('is-loading');
        $.ajax({
          type: 'POST',
          url: $('#contactFormAlt').attr('action'),
          data: $('#contactFormAlt').serialize(),
          success: function() {
            $('#contactFormAlt .form-control, #contactFormAlt .btn-circle').prop('disabled', true);

            setTimeout(function() {
              NProgress.done();
              $('#contactFormAlt .btn-circle').addClass('is-done');
            }, 1000); // eye candy
          }
        });
      }
    });
  };

  // On document ready NProgress
  NProgress.start();

  // PJAX
  $(document).pjax('a[data-pjax]', {
    container: '#pjaxable',
    fragment: '#pjaxable',
    scrollTo: 0,
    timeout: 3000,
    maxCacheLength: 0
  });

  // PJAXed NProgress
  $(document).on('pjax:click', function() {
    NProgress.start();
  });

  $(document).on('pjax:end', function() {
    NProgress.done();
    runOnLoadScripts();

    setTimeout(function() {
      $('#tiles').addClass('images-ready');
    }, 300); // eye candy
  });

  // runOnLoadScripts
  var runOnLoadScripts = function() {
    var $scripts = $('#pjaxable script[type="onload"]');

    $scripts.each(function () {
      eval(this.innerHTML);
    });

    $('#mobileNavigationBtn').click(function(event) {
      event.preventDefault();

      $('body').toggleClass('mobile-nav-open');
      $('#mobileNavigation').modal('toggle');
    });

    $('#mobileNavigation a').click(function() {
      $('#mobileNavigation').modal('hide');
    });

    $('#mobileNavigation').on('hidden.bs.modal', function () {
      if ( $('body').hasClass('mobile-nav-open') ) {
        $('body').removeClass('mobile-nav-open');
      }
    });

    $('#contactForm').validate({
      rules: {
        cfName: 'required',
        cfEmail: {
          required: true,
          email: true
        },
        cfAntispam: {
          required: true,
          digits: true,
          range: [2, 2]
        },
        cfMessage: 'required'
      },

      errorPlacement: function(error, element) {
        return true;
      },

      errorClass: 'is-invalid',
      validClass: 'is-valid',

      submitHandler: function(form) {
        NProgress.start();
        if ( $('#contactForm').hasClass('is-sending') ) { return false; }
        $('#contactForm').addClass('is-sending');
        $('#contactForm .btn-circle').addClass('is-loading');
        $.ajax({
          type: 'POST',
          url: $('#contactForm').attr('action'),
          data: $('#contactForm').serialize(),
          success: function() {
            $('#contactForm .form-control, #contactForm .btn-circle').prop('disabled', true);

            setTimeout(function() {
              NProgress.done();
              $('#contactForm .btn-circle').addClass('is-done');
            }, 1000); // eye candy
          }
        });
      }
    });
  };

  // Attach FastClick.js
  FastClick.attach(document.body);

  // runOnLoadScripts
  runOnLoadScripts();

  // On document load NProgress
  $(window).load(function() {
    NProgress.done();
  });

});