$(function(){
	 $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    });	 

	 $("#sign-up-btn").on("click",function(){

		var base_url=$("#base_url").val();
		var data={
				"name":$("#signupModal #name").val(),
				"mobile":$("#signupModal #mobile").val(),
				"email":$("#signupModal #email").val(),
				"password":$("#signupModal #password").val()
				};
			$.post(base_url+"User/register",{data:data},function(data){
				var data=$.parseJSON(data);
				if(data.status=="ok"){
					window.location.reload();
				}
				else if(data.status=="fail"){
					window.location.href="#!";
				}
				else{
					console.log(data);
				}
			});
			$("#signupModal input").val(""); $("#sign-up-btn").val("Sign Up");

			

		});

	 $("#login-btn").on("click",function(){
		var base_url=$("#base_url").val();
		var data={
				"email":$("#email").val(),
				"password":$("#password").val()
				};
			$.post(base_url+"User/login",{data:data},function(data){
				var data=$.parseJSON(data);
				if(data.status=="ok"){
					window.location.reload();
				}
				else if(data.status=="fail"){
					window.location.href="#!";
				}
				else{
					console.log(data);
				}

			});
			$("#loginModal input").val(""); $("#login-btn").val("Login");

		});

	 $(".nav-bar-dropdown").hover(function(){
	 	var containerID = $(this).data("target");
	 	$(".dropdown-menu-container").hide();
	 	$("#"+containerID).fadeIn(300);
	 },function(){
	 	console.log("containerID");
		$(".dropdown-menu-container").hide();
	 });

	 $(".modal").modal();

	 $("#userBtn").on("click",function(){
	 	//$("#signupModal").modal('close');
	 	$("#loginModal").modal('open');
	 });

	 $("#userBtn-mobile").on("click",function(){
	 	//$("#signupModal").modal('close');
	 	$("#loginModal").modal('open');
	 });
	 
	 $("#signup-user-Btn").on("click",function(){
	 	$("#signupModal").modal('open');
	 	//$("#loginModal").modal('close');
	 });

	 $("#login-user-Btn").on("click",function(){
	 	$("#loginModal").modal('open');
	 	//$("#loginModal").modal('close');
	 });


/*Position Fixed On Scroll top */

	var header = $(".categories-area");
	  $(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	    var height= $('header').height() + $('.productBanner').height();
	       if (scroll >= height) {
	          header.addClass("fixed");
	        } else {
	          header.removeClass("fixed");
	        }
	});

/*
	$(window).scroll(function(){
	  var sticky = $('.categories-area'),
	      scroll = $(window).scrollTop();

	  if (scroll >= 1) sticky.addClass('fixed');
	  else sticky.removeClass('fixed');
	});
*/
});

