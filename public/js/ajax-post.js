$(document).ready(function () {

   $('#post-container span.edit').on('click', function(){
      var id = $(this).attr('id');
      // console.log(id);
      $.ajax({
         url: 'post/' + id,
         type: 'GET',
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
         success: function (data) {
            // window.location.reload();
            console.log(data);
            console.log('success');
         },
         error: function (data) {
            console.log('error');
           alert(data);
         }
      });
   });

   $('#post-container span.delete').on('click', function(){
      var id = $(this).attr('id');
      console.log(id);
     $.ajax({
         url: 'post/' + id,
         type: 'delete',
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
         data: {
            _id: id
         },
         success: function (data) {
            // window.location.reload();
            console.log(data);
            console.log("success");
         },
         error: function (data) {
           alert(data);
         }
      });
   });
});