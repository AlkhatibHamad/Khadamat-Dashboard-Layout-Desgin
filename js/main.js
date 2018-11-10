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


  /*profile certificate*/
  $('.certif').click(function(){
    $('.Profile-overlay-certificate').fadeIn(2000,function(){
      $('body').css('overflow','hidden');
    });
  });

  $('.close').click(function(){
    $('.Profile-overlay-certificate').fadeOut(2000,function(){
      $('body').css('overflow','auto');
    });
  });


  $('.identit').click(function(){
    $('.Profile-overlay-identity').fadeIn(2000,function(){
      $('body').css('overflow','hidden');
    });
  });

  $('.close').click(function(){
    $('.Profile-overlay-identity').fadeOut(2000,function(){
      $('body').css('overflow','auto');
    });
  });



});