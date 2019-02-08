$(document).ready(function(){
  var mySwiper = new Swiper ('.swiper-container', {
    autoHeight: true,
  });

  $("#geocoder").click(function(){
    $(".reglage__section").css({"transform": "translateY(0)", "opacity": "1", "z-index": "4"});
  });

  function revealModal(arg){
    var id = arg.attr("id");
    $('.'+id+'-modal').css({"display": "flex"});
    $('.'+id+'-modal').animate({"opacity": "1"}, 300);
    $('.modal').animate({"opacity": "1"}, 300);
    $('body').css({"overflow-y": "hidden"});
  }

  var arr = ['ajout-vehicle__card', 'name__modif', 'mdp__modif', 'mail__modif', 'house__ajout', 'work__ajout'];
  $('.open-modal').click(function(){
    for (var i = 0; i < arr.length; i++){
      if ($(this).hasClass(arr[i])){
        revealModal($(this));
      }
    }
  });

  $('.close-modal').click(function(){
    $('.container-modal').fadeTo(300, 0, function(){
      $('.container-modal').css({"display": "none"});
      $('body').css({"overflow-y": "auto"});
    });
  });
});