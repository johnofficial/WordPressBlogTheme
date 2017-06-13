$( document ).ready(function() {
mobileMenu();
sliderControls();
animatePosts();
	window.scrollBy(0, 1);
});


function mobileMenu(){
  $(".mobile-nav-toggle").on('click', function(){
    var status = $(this).hasClass('is-open');
    if(status){
      $(".mobile-nav-toggle, .mobile-header").removeClass("is-open");
    }else{
      $(".mobile-nav-toggle, .mobile-header").addClass("is-open");
    }
});
}

function sliderControls(){
	var left 		= $('[left-arrow]');
	var right 		= $('[right-arrow]');
	var cposition	= 0;
	var sWidth 			= $(window).width();

	left.on('click', function() {
		if(sWidth <= 480){

			if(cposition > 0){

				$('[slider-wrap]').animate({
					"left": "+="+sWidth+"px"
				}, 500);
				this.cposition = cposition-=100;
			}
		}
		else
		{
			if(cposition > 0){

				$('[slider-wrap]').animate({
					"left": '+=340px'
				}, 500);
				this.cposition = cposition-=340;
			}
		}
		
	});
	right.on('click', function() {
		if(sWidth <= 480){

			if(cposition >= 0 && cposition <=300){

				$('[slider-wrap]').animate({
					"left": "-="+sWidth+"px"
				}, 500);
				this.cposition = cposition+=100;
			}
		}
		else
		{
			if(cposition >= 0 && cposition <=340){

				$('[slider-wrap]').animate({
					"left": '-=340px'
				}, 500);
				this.cposition = cposition+=340;
			}
		}
	});

}

function animatePosts() {

	$(window).scroll(function() {
    var xScroll = $(this).scrollTop();

    $("[animate-this]").each(function() {
        var that = this;
        if(xScroll > $(that).offset().top - $(window).height()) {
            setTimeout(function(){
                $(that).addClass('animate-this');
            },150);
        }
    });
});
}