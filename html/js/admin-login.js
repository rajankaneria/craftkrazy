$(function(){

	$("form[name=Login] .button-container i").on("click",function(){
		var baseurl=$("#base_url").val();
		var data={
			"a_name":$("#a_name").val(),
			"a_pass":$("#a_pass").val()
		};
		$.post(baseurl+"Seller/login",{data:data},function(data){
			var data=$.parseJSON(data);
			if(data.status=="ok"){
				window.location.href=baseurl+"admin";
			}
			else if(data.status="fail"){
				alert("Login Fail...");
				window.location.href="#!";
			}
			else{console.log(data);}

		});
	});

});


