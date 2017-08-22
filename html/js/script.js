$(function(){
	 $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    });



	 $(".nav-bar-dropdown").hover(function(){
	 	var containerID = $(this).data("target");
	 	$(".dropdown-menu-container").hide();
	 	$("#"+containerID).fadeIn(300);
	 },function(){
	 	console.log("out");
		$(".dropdown-menu-container").hide();
	 });

});