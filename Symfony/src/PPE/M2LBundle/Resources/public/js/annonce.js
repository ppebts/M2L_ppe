$( document ).ready(function() {

	if ($(window).width() > 500) {
		$('.fancybox').fancybox({
			helpers : {
			        overlay : {
			            css : {
			                'background' : 'rgba(58, 42, 45, 0.95)'
			            }
			        }
			    },
		});
		$('.ajoutAnnonce').fancybox({
				helpers : {
				        overlay : {
				            css : {
				                'background' : 'rgba(58, 42, 45, 0.95)'
				            }
				        }
				    },
				padding: "0"
				});
	}
	if ($(window).width() < 501) {
		$('.ajoutAnnonce').fancybox({
		helpers : {
		        overlay : {
		            css : {
		                'background' : 'rgba(58, 42, 45, 0.95)'
		            }
		        }
		    },
		width: "90%"
		});
		$('.annonce > img').removeClass('block_shadow');
	

		$('.fancybox').fancybox({
			width: '90%',
			helpers : {
			        overlay : {
			            css : {
			                'background' : 'rgba(58, 42, 45, 0.95)'
			            }
			        }
			    },
		});
	};
});
