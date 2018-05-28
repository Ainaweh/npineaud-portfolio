$(function(){
  var size=100;
  /*==========================================================================*/
  // Taille police

  $('.plus').click(function(){
    if (size<150) {
      size=size+3;
      $('html').css('font-size',size+'%');
    }
  })
  $('.moins').click(function(){
    if (size>=100) {
      size=size-3;
      $('html').css('font-size',size+'%');
    }
  })

  /*==========================================================================*/
  // Dyslexie

  $('.dys').click(function(){
    $('html').css('font-family','dyslexie !important')
  })

  /*==========================================================================*/
  // Animation bouton burger menu

  $('#menu-burger').click(function() {
    var overlayMenu = $('#overlay-menu'),
        menuIconLines = $('#menu-burger .menu-icon'),
        menuBurger = $('#menu-burger');

    if(overlayMenu.hasClass('open')) {
      overlayMenu.removeClass('open');
      menuIconLines.removeClass('open');
      menuBurger.removeClass('open');
    }else{    overlayMenu.addClass('open');
              menuIconLines.addClass('open');
              menuBurger.addClass('open');
    };


  })
});
