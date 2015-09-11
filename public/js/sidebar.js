$(document).ready(function() {
    var left = 'fui-arrow-left';
    var right = 'fui-arrow-right';
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");

    if($('#menu-toggle span').hasClass(left)){
        	$('#menu-toggle span').removeClass(left).addClass(right);
        }
        else{
        	$('#menu-toggle span').removeClass(right).addClass(left);
        }
    });


});