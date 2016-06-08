var $= jQuery.noConflict();
$(document).ready(function(){
	$('.post-content a').attr('target','_blank');
	$('.nav-open').click(function(){
		$('.wrap-mobile-nav').slideDown();
	})
	$('.nav-close').click(function(event) {
		$('.wrap-mobile-nav').slideUp();
	});
	$('.single-post img').parent().addClass('img-link');
	$('.single-post img').parent().attr('target','_blank');
	var winW = $('.header.h-mobileonly').width();
	$('.wrap-search-mobile').css('width',winW-152);
})
$(window).resize(function(event) {
	var winW = $('.header.h-mobileonly').width();
	$('.wrap-search-mobile').css('width',winW-152);
});
$(window).scroll(function(){
    if(window.scrollY > $('.wrap-intro').height()) {
        $('.header').addClass('active');
    } else {
        $('.header').removeClass('active');
    }
})