  // #22. Colors Toggler

  $('.floated-colors-btn').on('click', function () {
    if ($('body').hasClass('color-scheme-dark')) {
      $('.menu-w').removeClass('color-scheme-dark').addClass('color-scheme-light').removeClass('selected-menu-color-bright').addClass('selected-menu-color-light');
      $(this).find('.os-toggler-w').removeClass('on');


      var theme = "color-scheme-light";
      window.localStorage.theme = theme;


    } else {
      $('.menu-w, .top-bar').removeClass(function (index, className) {
        return (className.match(/(^|\s)color-scheme-\S+/g) || []).join(' ');
      });
      $('.menu-w').removeClass(function (index, className) {
        return (className.match(/(^|\s)color-style-\S+/g) || []).join(' ');
      });
      $('.menu-w').addClass('color-scheme-dark').addClass('color-style-transparent').removeClass('selected-menu-color-light').addClass('selected-menu-color-bright');
      $('.top-bar').addClass('color-scheme-transparent');
      $(this).find('.os-toggler-w').addClass('on');


      var theme = "color-scheme-dark";
      window.localStorage.theme = theme;
    }
    $('body').toggleClass('color-scheme-dark');


    return false;
  });

var theme = window.localStorage.theme;

if(theme){  
  
  if(theme === "color-scheme-light"){

    $('.menu-w').removeClass('color-scheme-dark').addClass('color-scheme-light').removeClass('selected-menu-color-bright').addClass('selected-menu-color-light');
      $('.floated-colors-btn').find('.os-toggler-w').removeClass('on');
      $('body').removeClass('color-scheme-dark');
  }
  
  if(theme === "color-scheme-dark"){
     $('.menu-w').addClass('color-scheme-dark').addClass('color-style-transparent').removeClass('selected-menu-color-light').addClass('selected-menu-color-bright');
     $('.floated-colors-btn').find('.os-toggler-w').addClass('on');   
     $('body').addClass('color-scheme-dark');
  }

}