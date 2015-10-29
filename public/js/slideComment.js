$(document).ready(function() {
    $('.comment').on('click', function(){
      console.log($(this).attr('id'));
      var id = $(this).attr('id');
      $('#comment_'+id).slideToggle();
    });
  });
