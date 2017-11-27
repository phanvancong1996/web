$(function() {
	new WOW().init();
	$(".so").counterUp({
    delay: 10,
    time: 3000
	});

	$('[data-fancybox="watermark"]').fancybox({
  protect    : true,
  slideClass : 'watermark',
  toolbar    : false,
  smallBtn   : true

});
	
	
});




