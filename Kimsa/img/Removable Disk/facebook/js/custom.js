// JavaScript Document


$(document).ready(function() {
	var scroll_start= 0;
	var startchange = $('.content-dummy');
	var offset = startchange.offset();
	if (startchange.length){
		
		$(document).scroll(function() {
			scroll_start = $(this).scrollTop();
			if(scroll_start > offset.top) {
				$(".navbar-default").css('background', 'rgba(255,0,0)');
			} else {
				$(".navbar-default").css('background','transparent');
			}
    
});
	}
});
