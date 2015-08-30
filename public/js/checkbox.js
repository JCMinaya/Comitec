$(document).ready(function() {
    var flag = true;
  $('#select_all').click(function(event) {
    if(flag) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
        });
        flag = false;
    }
    else {
      $(':checkbox').each(function() {
            this.checked = false;
        });
        flag = true;
    }
  });
});

