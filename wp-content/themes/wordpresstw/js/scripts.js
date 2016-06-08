var $= jQuery.noConflict();
$(document).ready(function(){
	$('.post-content a').attr('target','_blank');
	$('.nav-open').click(function(){
		$('.wrap-mobile-nav').slideDown();
	})
	$('.nav-close').click(function(event) {
		$('.wrap-mobile-nav').slideUp();
	});
})

$(window).scroll(function(){
    if(window.scrollY > $('.wrap-intro').height()) {
        $('.header').addClass('active');
    } else {
        $('.header').removeClass('active');
    }
})