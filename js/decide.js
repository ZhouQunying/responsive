window.onload = $(function(){
	if(device.tablet() == true){
		$('.header').css('position','absolute');
		$('.head').addClass('head_clear');
		$('.aside_up').css('display','none');
	}
	else if(device.mobile() == true){
		$('.aside_up').css('display','none');
		if($(document).width() >= 480){
			$('.header').css('position','absolute');
		}
		$(window).resize(function(){
			if($(document).width() >= 480){
				$('.header').css('position','absolute');
			}
			else{
 				$('.header').css('position','');
			}
		})
	}
})