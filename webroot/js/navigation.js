$(document).ready(function(){
	var $top1= $('.actions-container').offset().top-20;
	$(window).scroll(function(){
		if($(window).scrollTop()>=$top1) { 
			$('.actions-container').addClass('fixed');
			$('.info-spacer').removeClass('hidden');
		}else{ 
			$('.actions-container').removeClass('fixed'); 
			$('.info-spacer').addClass('hidden');
		}
	});
	$('.pop').popover({'content':$('#pop-form').clone()});
	$('#pop-form').remove();
	
});