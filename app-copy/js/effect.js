
/* Height fit */

$(function(){
	if($(document).height() < window.screen.height -500){
		growHeight();
	}else{
		lessenHeight();
	}
	$(window).resize(function(){
		if($(document).height() < window.screen.height - 500){
			growHeight();
		}else{
			lessenHeight();
		}
	})
})


/* Apply page */

function growHeight(){
	$('.apply_content').removeClass('apply_content_max').addClass('apply_content_min');
}
function lessenHeight(){
	$('.apply_content').removeClass('apply_content_min').addClass('apply_content_max');
}


/* Width fit */

$(function(){
	// Document width
	var doc_w = $(document).width();
	if(doc_w >= 1200){
		doc_01();
	}
	else if(doc_w < 1200 && doc_w >= 960){
		doc_02();
	}
	else if(doc_w < 960 && doc_w >= 480){
		doc_03();
	}
	else{
		doc_04();
	}

	// Window width
	var win_w = $(window).width();
	if(win_w >= 1200){
		growWidth();
		teacher();
	}
	else if(win_w < 1200 && win_w >= 960){
		lessenWidth();
		teacher();
	}

	// Resize
	$(window).resize(function(){
		var doc_w = $(document).width();
		if(doc_w < 1200){
			if(doc_w < 960){
				if(doc_w < 480){
					cancel_effect();
					doc_04();
				}
				else{
					cancel_min();
					doc_03();
				}
			}
			else{
				cancel_min();
				doc_02();
			}
		}
		else{
			cancel_min();
			doc_01();
		}

		var win_w = $(window).width();
		if(win_w >= 1200){
			growWidth();
			teacher();
		}
		else if(win_w < 1200 && win_w >= 960){
			lessenWidth();
			teacher();
		}
	})
})

function doc_01(){
	effect();
	width_max();
	scroll_pc();
	teacher();
}
function doc_02(){
	effect();
	width_max();
	scroll_pc();
	teacher();
}
function doc_03(){
	effect();
	width_medium();
	scroll_pc();
	teacher();
}
function doc_04(){
	width_min();
	video_min();
}

function lessenWidth(){
	$('.head').addClass('head_medium').removeClass('head_max');
	$('.section_02_main').addClass('section_02_main_medium').removeClass('section_02_main_max');
	$('.diary').addClass('diary_medium').removeClass('diary_max');
	$('.section_03_main').addClass('section_03_main_medium').removeClass('section_03_main_max');
	$('.teacher_sec').addClass('teacher_sec_medium').removeClass('teacher_sec_max');
	$('.teacher_info').addClass('teacher_info_medium').removeClass('teacher_info_max');
}
function growWidth(){
	$('.head').addClass('head_max').removeClass('head_medium');
	$('.section_02_main').addClass('section_02_main_max').removeClass('section_02_main_medium');
	$('.diary').addClass('diary_max').removeClass('diary_medium');
	$('.section_03_main').addClass('section_03_main_max').removeClass('section_03_main_medium');
	$('.teacher_sec').addClass('teacher_sec_max').removeClass('teacher_sec_medium');
	$('.teacher_info').addClass('teacher_info_max').removeClass('teacher_info_medium');
}

/* Effect */

function effect(){

	// Aside icon
	$('.aside_up').bind('click',function(){
		$('body,html').stop().animate({
			scrollTop:0
		},1000);
		return false;
		$('.aside_up').hide();
	});

	// Index teacher team
	$('.figc:odd').addClass('figc_odd');
	$('.section_03 section').mouseenter(function(){
		$(this).children('.figc').removeClass('figc').addClass('figc_foc');
	});
	$('.section_03 section').mouseleave(function(){
		$(this).children('.figc_foc').removeClass('figc_foc').addClass('figc');
	});
	// Click text or span 
	$('.section_03 .figc,.teacher_avatar span').bind('click',function(){
		var span_p = $(this).parent();
		window.location.href = span_p.children().attr('href');
	});

	// Course
	$('.course1_blue').bind('click',function(){
		$('.course2').removeClass('course2_none');
		$('.course1').addClass('course1_none');
	});
	$('.course2_blue').bind('click',function(){
		$('.course1').removeClass('course1_none');
		$('.course2').addClass('course2_none');
	});
}


/* Max width scroll */

function scroll_pc(){

	if($(window).scrollTop() > $(window).height()){
		$('.aside_up').show();
	}

	window.onscroll = function(){
		if($(window).scrollTop() > $(window).height()){
			$('.aside_up').show();
		}else{
			$('.aside_up').hide();
		}
	}
}


/* Max width */

function width_max(){

	// Aside icon
	$('.aside_up').addClass('aside_up_max').removeClass('aside_up_medium');
	$('.aside_up_max').css('bottom',$('.footer').height() + 40);
}


/* Medium width */

function width_medium(){

	// Aside icon
	$('.aside_up').addClass('aside_up_medium').removeClass('aside_up_max');
	$('.aside_up_medium').css('bottom',$('footer').height() + 35);
	if($('.nav li').hasClass('t_li') == false){
		$('.nav ul:last-child').append('<li class="t_li"><a href="apply.php" target="_self">申请试听</a></li>');
	}
}


/* Min width */

function width_min(){

	var screen_width = $(window).width();
	var screen_height = $(window).height();

	// Nav
	var sib = $('.index_content').siblings();
	var li_line = screen_height / 4 / 16;
	var menu_r = $('.aside_menu').css('right');
	var menu_w = $('.aside_menu').width();
	var hide_l = screen_width / 2 - 7;

	if($(sib).hasClass('m_logo') == false){
		$('.index_content').before('<div class="m_logo"><div><img src="./images/logo.png" /></div></div>');
	}

	if($('.nav li').hasClass('t_li')){
		$('.t_li').remove();
	}

	if($('.nav li').hasClass('m_li') == false){
		$('.nav ul:last-child').append('<li class="m_li"><a href="apply.php" target="_self">申请免费试听</a></li><li class="m_li"><aside class="aside_hide"><div><img src="./images/aside_hide.png" alt="" /></div></aside></li>');
	}

	$('.nav li').css('line-height',li_line);
	$('.nav div').css('left',hide_l);
	$('.aside_menu').height(menu_w).css('top',menu_r).bind('click',function(){
		$('.head').css('top','0%');
	});
	$('.nav aside').bind('click',function(){
		$('.head').css('top','-100%');
	})
	window.onscroll = function(){
		$('.head').css('top','-100%');
	}

	// Apply
	$('.back').bind('click',function(){
		history.back();
	})

	// Index
	$('.m_logo').height(screen_height);
	$('.diary_detials_min').height($('.diary_detials').width());

	// Teacher team
	$('.teacher_avatar img').addClass('.teacher_avatar_img');
	$('.teacher_avatar_img').height($('.teacher_avatar img').width()*1.377);
	// Click text or span
	$('.section_03 .figc,.teacher_avatar span').bind('click',function(){
		var span_p = $(this).parent();
		window.location.href = span_p.children().attr('href');
	})
}


/* Cancle min */

function cancel_min(){
	$('.head').removeAttr('style');
	$('.nav li').removeAttr('style');
	$('.diary_detials_min').removeAttr('style');
	$('.teacher_avatar_img').removeAttr('style');
}


/* Cancle effect */

function cancel_effect(){
	$('.aside_up').removeAttr('style');
	$('.teacher_avatar a').removeAttr('style');
}


/* Teacher team */

function teacher(){
	var w = $('.teacher_avatar a').width();
	$('.teacher_avatar a').height(w);
	$('#video').height($('#video').width() * 0.75);
}
function video_min(){
	$('#video,.video-js').height($('#video').width() * 0.75)
}