jQuery(function() {
	var showFlag = false;
	var pageTop = jQuery('#page-top');	
	pageTop.css('bottom', '-100px');
	var showFlag = false;
	//スクロールが400に達したらボタン表示
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 400) {
			if (showFlag == false) {
				showFlag = true;
				pageTop.stop().animate({'bottom' : '20px'}, 200); 
			}
		} else {
			if (showFlag) {
				showFlag = false;
				pageTop.stop().animate({'bottom' : '-100px'}, 200); 
			}
		}
	});
	//スクロールしてトップ
    pageTop.click(function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
    });
});


jQuery(function(){
	jQuery(".menubtn").click(function(){
		jQuery("#menu").toggleClass('togmenu');
	});	
});