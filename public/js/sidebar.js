$(document).ready(function() {
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if($('#menu-toggle span').hasClass('fui-triangle-left-large')){
        	$('#menu-toggle span').removeClass('fui-triangle-left-large').addClass('fui-triangle-right-large');
        }
        else{
        	$('#menu-toggle span').removeClass('fui-triangle-right-large').addClass('fui-triangle-left-large');
        }
    });


});