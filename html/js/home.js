$(function(){

	/*Slider JS*/
	  $('.carousel.carousel-slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 7000));
  		
  		function autoplay() 
  		{
    		$('.carousel').carousel('next');
    		setTimeout(autoplay, 7000);
     	}


     		 /* caraousel slider*/

		  $(document).ready(function(){
	      $('.carousel').carousel({
	            dist:0,
	            shift:0,
	            padding:50,
	            indicators: false
	      });

	      //$('.slider').slider('pause');

$('.nextProduct').click(function() {
 $('.carousel').carousel('next');
});
$('.prevProduct').click(function() {
 $('.carousel').carousel('prev');
});

	    });




});