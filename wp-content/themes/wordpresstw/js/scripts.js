var $= jQuery.noConflict();
$(document).ready(function(){
	$('.post-content a').attr('target','_blank');
})

$(window).scroll(function(){
    if(window.scrollY > $('.wrap-intro').height()) {
        $('.header').addClass('active');
    } else {
        $('.header').removeClass('active');
    }
})