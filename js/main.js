$(function(){
  $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
  });

  $(window).resize(function(e) {
    if($(window).width()<=768){
      $("#wrapper").removeClass("toggled");
    }else{
      $("#wrapper").addClass("toggled");
    }
  });


  /*Start loadind*/
  $('.hvr-backward').click(function(){
    $('body').css('overflow','hidden')

    $('.loading-overlay').fadeIn(1000,function(){

      $('.loading-overlay').fadeOut(2000,function(){

         $('body').css('overflow','auto')
      });

    });

  });
/*End loadind*/



});