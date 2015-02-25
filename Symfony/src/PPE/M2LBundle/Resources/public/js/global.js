$(document).ready(function(){

	$('input[type="file"]').parent('div').addClass('upload').prepend('<p class="upload_text">Choisir une image</p>');
	$('input[type="file"]').hover(function(){
		$('.upload_text').css('opacity', '0.5');
	},function(){
		$('.upload_text').css('opacity', '1');
	});

	$('.edit-logo').click(function(){
		$(this).hide();
		$(this).parent('.img-edit-container').next('.input_form_register').slideDown();
	});

	$('.date').prop('type', 'text').datepicker({
		beforeShow: function(input, inst)
		{
			inst.dpDiv.css({marginTop: -input.offsetHeight + 'px', marginLeft: input.offsetWidth + 110 + 'px'});	
			$('#ui-datepicker-div').addClass('ll-skin-melon');
		},
		changeMonth: true,
    	changeYear: true,
    	yearRange: "1935:2015",
    	dateFormat: 'yy-mm-dd',
    	regional: 'fr'
    });

});