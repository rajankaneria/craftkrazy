$(function(){

	/*Slider JS*/
	$('#mainSlider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 7000));
	  //$('.carousel.carousel-slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 7000));
  		
  		function autoplay() 
  		{
    		$('#mainSlider').carousel('next');
    		setTimeout(autoplay, 7000);
     	}


     		 /* caraousel slider*/

		  $(document).ready(function(){
	      $('#mainSlider').carousel({
	            dist:0,
	            shift:0,
	            padding:20,
	            indicators: false
	      });

	      //$('.slider').slider('pause');

			$('.nextProductMain').click(function() {
			 $('#mainSlider').carousel('next');
			});
			$('.prevProductMain').click(function() {
			 $('#mainSlider').carousel('prev');
			});
	    });


/*================= Paper Craft Slider Home page ==============*/

	$('#PaperCraft-Slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 7000));
	  //$('.carousel.carousel-slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 7000));
  		
  		function autoplay() 
  		{
    		$('#PaperCraft-Slider').carousel('next');
    		//setTimeout(autoplay, 7000);
     	}


$(document).ready(function(){
	      $('#PaperCraft-Slider').carousel({
	            dist:0,
	            shift:0,
	            padding:50,
	            indicators: false
	      });

	      //$('.slider').slider('pause');

			$('.nextProduct_paperCraft').click(function() {
			 $('#PaperCraft-Slider').carousel('next');
			});
			$('.prevProduct_paperCraft').click(function() {
			 $('#PaperCraft-Slider').carousel('prev');
			});
	    });
		  


/*================= Paper Craft Slider Home page ==============*/

	$('#MixedMedia-Slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 7000));
	  //$('.carousel.carousel-slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 7000));
  		
  		function autoplay() 
  		{
    		$('#MixedMedia-Slider').carousel('next');
    		//setTimeout(autoplay, 7000);
     	}


$(document).ready(function(){
	      $('#MixedMedia-Slider').carousel({
	            dist:0,
	            shift:0,
	            padding:50,
	            indicators: false
	      });

	      //$('.slider').slider('pause');

			$('.nextProduct_MixedMedia').click(function() {
			 $('#MixedMedia-Slider').carousel('next');
			});
			$('.prevProduct_MixedMedia').click(function() {
			 $('#MixedMedia-Slider').carousel('prev');
			});
	    });
		  
/*================= All responsive Slider Home page ==============*/
});


$(function(){
	$('.carousel.carousel-slider').carousel({
	    dist:0,
	    shift:0,
	    padding:50,
	    indicators: false
	});
});