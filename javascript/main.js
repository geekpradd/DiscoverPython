(function(){

    $('#sub').click(function(){
        $('#a').click()
    });

    // call prettyPhoto plugin
    $("a[rel^='prettyPhoto']").prettyPhoto();


})();
var pos=400
$(window).scroll(function(){
  var scroll =$(window).scrollTop();
  if (scroll> pos){

    $('#menu-but').css({'border-bottom':'17px double black','border-top':'6px solid black'});
    var black=true;
  }


    if (scroll<pos){
      $('#menu-but').css({'border-bottom':'17px double #eee','border-top':'6px solid #eee'});
    }




});
var main= function(){
  var menu=false
  $('#menu-but').click(function(){
    if (menu===false){
    $('.menu').animate({left:"0px"},200);
    $('body').animate({left:"285px"},200);
    $('#menu-but').animate({left:'300px'},200);
     menu=true;
   }
   else{
    $('.menu').animate({left:"-285px"},200);
    $('body').animate({left:"0px"},200);
    $('#menu-but').animate({left:'2%'},200);
    menu=false
   }
  });
  $('.icon-close').click(function(){
    $('.menu').animate({left:"-285px"},200);
    $('body').animate({left:"0px"},200);
    $('#menu-but').animate({left:'2%'},200);

  });

};
$(document).ready(main);
