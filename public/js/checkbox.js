$(document).ready(function() {
  
  $('#checkbox_public').change(function(){
      if (this.checked) {
        $('#major_checkboxes :checkbox').each(function() {
            this.disabled = true;
        });
      }else{
        $('#major_checkboxes :checkbox').each(function() {
            this.disabled = false;
        });
      }
  });

  var flag = true;

  $('#select_all').click(function(event) {
    if(flag) {
        // Iterate each checkbox
        $('#major_checkboxes :checkbox').each(function() {
            this.checked = true;
        });
        flag = false;
    }
    else {
      $('#major_checkboxes :checkbox').each(function() {
            this.checked = false;
        });
        flag = true;
    }
  });
});

