$(function(){

$("form[name=Register] .button-container i").on("click",function(){
	var baseurl=$("#base_url").val();
	var data={
		"company_name":$("#company_name").val(),
		"contact_person":$("#contact_person").val(),
		"email":$("#email").val(),
		"password":$("#password").val(),
		"mobile":$("#mobile").val(),
		"landline":$("#landline").val(),
		"address":$("#address").val(),
		"gcm_id":$("#gcm_id").val(),
	};
	
	$.post(baseurl+"Seller/register/",{data:data},function(data){

		var data=$.parseJSON(data);
		if (data.status=="ok") {
			window.location.href=baseurl+"admin";
		}
		else if(data.status=="fail"){
			alert(data.message);
		}
		else
		{
			console.log(data);
		}

	});
	$("#test1 input").val(""); $("#register").val("Register");
	
});


$("form[name=Login] .button-container i").on("click",function(){
var baseurl=$("#base_url").val();
var data={
	"a_name":$("#a_name").val(),
	"a_pass":$("#a_pass").val()
};
$.post(baseurl+"Seller/login",{data:data},function(data){
	var data=$.parseJSON(data);
	if(data.status=="ok"){
		alert("Login Success...");
		window.location.href=baseurl+"Seller/dashboard";
	}
	else if(data.status="fail"){
		alert("Login Fail...");
		window.location.href="#!";
	}
	else{console.log(data);}

});
$("#test2 input").val(""); $("#login").val("Login");

});


});

/*==================================*/

$('.toggle').on('click', function() {
  $('.container-area').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container-area').stop().removeClass('active');
});



