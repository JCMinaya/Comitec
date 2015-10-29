$(document).ready(function () {
	var n = 1;
	var MAX = 10;

	 $("#answer_type").click(function() {  
        if($("#answer_type").is(':checked')) {  
            $('[id^="option_"]').each(function(){
            	$(this).prop('disabled', true);
            	$(this).prop('required', false);
            });
            $('#add-option').attr('disabled', true);
        } else {  
        	$('[id^="option_"]').each(function(){
            	$(this).prop('disabled', false);
            	$(this).prop('required', true);
            });
            $('#add-option').attr('disabled', false);
        }
    }); 

	$('#add-option').on('click', function()
	{
		if(n == MAX){
			alert('La máxima cantidad de opciones es ' + MAX);
			return;
		}
	    n++;
		$('#input_group_'+(n-1)).after('<div id="input_group_'+n+'" class="input-group padding-bottom"><input required id="option_'+n+'" name="option_'+n+'" type="text" class="form-control" aria-label="..."><div class="input-group-btn"><a id="remove_option_'+n+'" type="button" class="btn btn-default remove">Eliminar opción</a></div></div>');
	});

	$('#static').on('click', '.btn.btn-default.remove',  function()
	{
		var id = $(this).attr('id').split('_')[2];
		if($('[id^="remove_option_"]').size() != 1)
		{
			$('#input_group_' + id).remove();
			n--;
		}
	});
});