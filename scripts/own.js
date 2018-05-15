 function scrollToDiv($div_name){
  $("html, body").delay(500).animate({
      scrollTop: $($div_name).offset().top
  }, 500);
  }


  $(document).on('click', '.top-nav ul li', function() {
      var page = $(this).attr("data-page");
    scrollToDiv('#'+page);
  });

