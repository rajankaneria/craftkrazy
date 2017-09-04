$(function(){

$("#register").on("click",function(){
	var baseurl=$("#baseurl").val();
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
	console.log(data);
	
	$.post(baseurl+"Seller/register",{data:data},function(data){
		var data=$.parseJSON(data);
		if (data.status=="ok") {
			alert(data.message);
			window.location.href="login";
		}
		else if(data.status=="fail"){
			alert(data.message);
		}
		else
		{
			console.log(data);
		}

	});
	
});
});





$("#login").on("click",function(){
var baseurl=$("#baseurl").val();
var data={
	"a_name":$("$a_name").val(),
	"a_pass":$("$a_pass").val()
};
$.post(baseurl+"Seller/login",{data:data},function(){
	var data=$.parseJSON(data);
	if(data.status=="ok"){
		alert("Login Succesfully...");
		window.location.href="#!";
	}
	else if(data.status="fail"){
		alert("Login Fail...");
		window.location.href="#!";
	}
	else{console.log(data);}

});

});