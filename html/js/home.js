$(function(){

	/*Slider JS*/
	  $('.carousel.carousel-slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 7000));
  		
  		function autoplay() 
  		{
    		$('.carousel').carousel('next');
    		setTimeout(autoplay, 7000);
     	}

});