$("#Register").on("click",function(){
	var baseurl=$("#baseurl").val();
	var data={
		"company_name":$("#company_name").val(),
		"contact_person":$("#contact_person"),
		"email":$("#email").val(),
		"password":$("#password").val(),
		"mobile":$("#mobile").val(),
		"landline":$("#landline").val(),
		"address":$("#address").val(),
		"gcm_id":$("#gcm_id").val(),
		"status":$("#status").val(),
	};
	$.post(baseurl+"Seller/register",{data:data},function(data){
		var data=$.parseJSON(data);
		if (data.status=="ok") {
			alert("Your Registration Successfully");
			window.location.href="login";
		}
		else if(data.status=="fail"){
			alert("Your Registration get Fail");
		}
		else
		{
			console.log(data);
		}

	});

});