$(document).ready(function() {
  /* top-left logo animation */
    $('.logo-container')
      .stop(true)
      .animate({
      left:'30px'
    }, 1000);
  $('h2')
        .stop(true)
        .animate({
            opacity:"1"
        },1200);
  /* title animation */
  $('h1')
        .stop(true)
        .animate({
            opacity:"1"
        },1500);
  /* 1 */
  $('.rectangle1') 
        .stop(true)
        .animate({
            left:"97%",  
        },2200);
  /* 2 */
  $('.rectangle2') 
        .stop(true).delay(500)
        .animate({
            left:"94%",  
        },2200);
  /* 3 */
  $('.rectangle3') 
        .stop(true).delay(1000)
        .animate({
            left:"91%",  
        },2200);
  /* 4 */
  $('.rectangle4') 
        .stop(true).delay(1500)
        .animate({
            left:"88%",  
        },2200);
  /* 5 */
  $('.rectangle5') 
        .stop(true).delay(2000)
        .animate({
            left:"85%",  
        },2950);

});