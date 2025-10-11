/*-----------------------------------------------------------------------------------*/
/*	FLEXSLIDER
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function(){
	//Top Slider
	$('.flexslider.top_slider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: true,
		animationLoop: true,
		slideshow: true,
		 slideshowSpeed: 40000,
        animationSpeed: 300,
        startAt: 0,
        initDelay: 0,
		prevText: "",
		nextText: "",
		sync: "#carousel"
	});
	
	homeHeight();
	
	jQuery('.flexslider.top_slider .flex-direction-nav').addClass('container');
	
});

jQuery(window).resize(function(){
	homeHeight();
	
});

jQuery(document).ready(function(){
	homeHeight();
	
});

function homeHeight(){
	var wh = jQuery(window).height();
	jQuery('.top_slider, .top_slider .slides li').css('height', wh);
}

