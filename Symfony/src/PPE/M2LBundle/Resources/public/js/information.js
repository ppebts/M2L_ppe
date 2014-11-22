$( document ).ready(function() {
	$('.information_content').hide();
	$('.information_titre').click(function(){
		$(this).children('.information_content').toggle(400);
	});
});