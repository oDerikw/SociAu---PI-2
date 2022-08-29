$('nav a').click(function(e){
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;
        console.log(targetOffset);
    $('html, body').animate({
      scrollTop: targetOffset
    }, 500);
  });