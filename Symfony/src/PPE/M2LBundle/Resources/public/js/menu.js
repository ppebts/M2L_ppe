$( document ).ready(function() {

	$('#menu li').hover(function(){ // change le bckgrnd des li au hover
		$(this).css('background', '#154b77');
	},function(){
		$(this).css('background', '#18568C');
	});

	$(function(){
	    $('#menu').data('size','big');
	});
	if ($(window).width() > 1149) { //desktop

		if ($('#panel').length != 0) {

			$('#panel').on('click',function(event){
				$('.open').animate({left: '-170px'},300).removeClass('open').addClass('hidden');
				$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
				if ($('#panel_container').hasClass('hidden')) {
					$('#panel_container').css('display', 'block').animate({opacity: 1},100).removeClass('hidden').addClass('visible');
				}else if ($('#panel_container').hasClass('visible')){
					$('#panel_container').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');		
				}
				event.stopPropagation();
			});

			$('html').click(function(){
				$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
			});
		};
	}

	if ($(window).width() < 1150 && $(window).width() > 375) { //ipad

		if ($('#panel').length != 0) {

			$('#panel').on('click',function(event){
				$('.open').animate({left: '-170px'},300).removeClass('open').addClass('hidden');
				$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
				if ($('#panel_container').hasClass('hidden')) {
					$('#panel_container').css('display', 'block').animate({opacity: 1},100).removeClass('hidden').addClass('visible');
				}else if ($('#panel_container').hasClass('visible')){
					$('#panel_container').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');		
				}
				event.stopPropagation();
			});

			$('html').click(function(){
				$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
			});
		};

		$('#center_mobile').on('click',function(event){
			$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
			if ($('#menu_container').hasClass('hidden')) {
				$('#menu_container').css('display', 'block').animate({opacity: 1},100).removeClass('hidden').addClass('visible');
			}else if ($('#menu_container').hasClass('visible')){
				$('#menu_container').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');		
			}
			event.stopPropagation();
		});

		$('#account').on('click',function(event){
			$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
			if ($('#account_container').hasClass('hidden')) {
				$('#account_container').css('display', 'block').animate({opacity: 1},100).removeClass('hidden').addClass('visible');
			}else if ($('#account_container').hasClass('visible')){
				$('#account_container').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');		
			}
			event.stopPropagation();
		});

		$('html').click(function(){
			$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
		});
	};

	if ($(window).width() <= 375) { //iphone

		if ($('#panel').length != 0) {

			$('#panel').on('click',function(event){
				$('.open').animate({left: '-170px'},300).removeClass('open').addClass('hidden');
				$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
				$('body').animate({marginLeft: "0px"},300);
				if ($('#panel_container').hasClass('hidden')) {
					$('#panel_container').css('display', 'block').animate({opacity: 1},100).removeClass('hidden').addClass('visible');
				}else if ($('#panel_container').hasClass('visible')){
					$('#panel_container').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');		
				}
				event.stopPropagation();
			});
		}

		$('#account').on('click',function(event){
			$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
			$('.open').animate({left: '-170px'},300).removeClass('open').addClass('hidden');
			$('body').animate({marginLeft: "0px"},300);
			if ($('#account_container').hasClass('hidden')) {
				$('#account_container').css('display', 'block').animate({opacity: 1},100).removeClass('hidden').addClass('visible');
			}else if ($('#account_container').hasClass('visible')){
				$('#account_container').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');		
			}
			event.stopPropagation();
		});

		$('#menu_phone').on('click',function(event){
			$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
			if ($('#menu_phone_container').hasClass('hidden')) {
				$('#menu_phone_container').css('display', 'block').animate({left: 0},300).removeClass('hidden').addClass('open');
				$('body').animate({marginLeft: "170px"},300).css('overflow-y', 'hidden');
			}else if ($('#menu_phone_container').hasClass('open')){
				$('#menu_phone_container').animate({left: '-170px'},300).removeClass('open').addClass('hidden');		
				$('body').animate({marginLeft: "0px"},300).css('overflow-y', 'visible');
				$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');

			}		
			event.stopPropagation();
		});

		$('html').click(function(){
			$('.open').animate({left: '-170px'},300).removeClass('open').addClass('hidden');
			$('.visible').animate({opacity: 0},100).css('display', 'none').removeClass('visible').addClass('hidden');
			$('body').animate({marginLeft: "0px"},300).css('overflow-y', 'visible');
		});
	}
	if ($(window).width() > 375) {
		$(window).scroll(function(){
		    var $nav = $('#menu');
		    if ($('body').scrollTop() > 0) {
		        if ($nav.data('size') == 'big') {
		            $nav.data('size','small').stop().animate({height:'30px'},100);
					$('#logo').animate({width : "25px"},100);
					$('#logo_link').animate({top : "0"},100);
					$('#menu > ul > li > a').animate({lineHeight :"30px"},100);
					$('#menu > #panel').animate({lineHeight: "30px"},100);
					$('#menu > #center_mobile').animate({lineHeight: "30px"},100);
					$('#menu > #account').animate({width: "20px", marginTop: "5px", marginRight: "35px"},100);
					$('#account_container').animate({top: "40px"},100);
					$('#panel_container').animate({top: "40px"},100);
					$('#menu_container').animate({top: "40px"},100);

		        }
		    } else {
		        if ($nav.data('size') == 'small') {
		            $nav.data('size','big').stop().animate({height:'55px'},100);
					$('#logo').animate({width : "40px"},100);	
					$('#logo_link').animate({top : "5px"},100);
					$('#menu > ul > li > a').animate({lineHeight :"55px"},100);
					$('#menu > #panel').animate({lineHeight: "55px"},100);
					$('#menu > #center_mobile').animate({lineHeight: "55px"},100);
					$('#menu > #account').animate({width: "25px", marginTop: "15px", marginRight: "33px"},100);
					$('#account_container').animate({top: "60px"},100);
					$('#panel_container').animate({top: "60px"},100);
					$('#menu_container').animate({top: "60px"},100);
		        }  
		    }
		});
	};
});
