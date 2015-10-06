$(function () {
	var n = 1;
	$('#remove-question').hide();

	$('#add-question').on('click', function(){
	    n++;
		$(this).before('<div class="form-group"><label for="question_'+n+'">Ingresa la pregunta #'+n+'.</label><input class="form-control" required="required" name="question_'+n+'" type="text" id="question_'+n+'"><small class="text-danger"></small></div>');
		$('#remove-question').show();

	});
	$('#remove-question').on('click', function(){
		$(this).prev().prev().remove();
		n--;
		if(n==1)
			$('#remove-question').hide();
	});
});