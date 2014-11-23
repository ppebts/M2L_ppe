$( document ).ready(function() {
	$('.information_content').hide();
	$('.information_titre').click(function(){
		$('.expanded').removeClass('expanded').addClass('closed').next('.information_content').not(':animated').slideUp();
		$(this).removeClass('closed').addClass('expanded').next('.information_content').not(':animated').slideDown();			
	});
	$('.information_titre').hover(function(){
		$(this).css("background", "#18B293");
	},function(){
		$(this).css("background", "#1abc9c");
    }
	)
});