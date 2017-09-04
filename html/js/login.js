$("#Login").on("click",function(){
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