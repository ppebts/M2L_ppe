$( document ).ready(function() {

	if ($(window).width() > 375) {
		$('.fancybox').fancybox({
			helpers : {
			        overlay : {
			            css : {
			                'background' : 'rgba(58, 42, 45, 0.95)'
			            }
			        }
			    },
			'autoSize' : false,
			'width' : '70%'
		});
	};
});