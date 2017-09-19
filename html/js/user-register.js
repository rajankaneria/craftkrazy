$(function(){
	$(".waves-button-input").on("click",function(){
		var base_url=$("#base_url").val();
		var data={
				"name":$("#name").val,
				"mobile":$("#mobile").val,
				"email":$("#email").val(),
				"password":$("#password").val()
				}
			$.post(base_url+"User/register",{data:data},function(data){
				var data=$.parseJSON(data);
				if(data.status=="ok"){
					window.location.href=base_url+"User/login";
				}
				else if(data.status=="fail"){
					window.location.href="#!";
				}
				else{
					console.log(data);
				}

			});

	});

});
