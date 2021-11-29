// slideToggle__mediaQuery
$(window).on('load resize', function(){

  let winW = $(window).width(),
  devW = 1006,
  p_arrow = $('.point__arrow'),
  p_text = $('.point__text');

  if (winW >= devW){
    p_arrow.hide();
    p_text.removeAttr('style');
  }else{
    p_arrow.removeAttr('style');
    p_text.hide();
    p_arrow.text('▼');
  }
});

// point__slide
$(function () {
  $('.point__head').each(function () {
    $(this).on('click', function () {

      let num = $(this).data('target'),
      text = ('#point__text__' + num),
      arrow = ('#point__arrow__' + num);

      $(text).slideToggle();
      if ($(arrow).text().indexOf('▼') != -1) {
        $(arrow).text('▲');
      } else {
        $(arrow).text('▼');
      }
    });
  });

// skill__modal
  $('.modal__open').each(function(){
    $(this).on('click', function(){
      let target = '#' + $(this).data('target');
      $(target).fadeIn();
    });
  });
  $('.modal__close').on('click', function(){
    $('.modal').fadeOut();
  });

// add_animationClass
  $('.header__nav li').addClass('link_ani');
  $('.foot__nav li').addClass('link_ani');
  $('.frameLink li').addClass('link_ani');

// loading_animation
$(window).on('load',function(){
  endLoading();
});
setTimeout('endLoading()',10000);
function endLoading(){
  $('.loader').fadeOut(600,function(){
    $('#loading').fadeOut(600);
  })
}

// iframe pageChange
  $('.frameLink__button').on('click',function(){
    let url = $(this).attr('data-url');
    $('iframe').attr('src',url);
  })

  $('iframe').on('load',function(){
    try{
      $(this).height(0);
      $(this).height(this.contentWindow.document.documentElement.scrollHeight);
    } catch(e){
    }
  });
});
