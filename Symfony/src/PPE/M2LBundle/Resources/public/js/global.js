$(document).ready(function(){

	$('input[type="file"]').parent('div').addClass('upload').prepend('<p class="upload_text">Choisir une image</p>');
	$('input[type="file"]').hover(function(){
		$('.upload_text').css('opacity', '0.5');
	},function(){
		$('.upload_text').css('opacity', '1');
	});

});