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

});

$(document).ready(function () {

  // show/hid upload image input
    var image_input_div = '<div class="custom-file re-upload-image-input">\n    ' +
        '   <input type="file" onchange="readURL(this)" class="custom-file-input mb-4" id="customFile" name="icon" required>\n    ' +
        '   <label class="custom-file-label" for="customFile">إختر الايقونة </label>\n' +
        '</div>';

    $('.image-preview .re-upload-btn').click(function () {
        $('.image-preview').parent().append(image_input_div);
        $(this).remove();
    })
});

// Display selected Image
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#selectedImageHolder')
                .attr('src', e.target.result)
                .width(50)
                .height(50);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

  /*Start loadind*/
  $('.menu-itme').click(function(){
    $('body').css('overflow','hidden')

    $('.loading-overlay').fadeIn(1000,function(){

      $('.loading-overlay').fadeOut(2000,function(){

         $('body').css('overflow','auto')
      });

    });

  });
  /*End loadind*/