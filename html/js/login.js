$("#login").on("click",function(){
var baseurl=$("#baseurl").val();
var data={
	"email":$("$email").val(),
	"passwod":$("$passwod").val()
};
$.post(baseurl+"Seller/login",{data:data},function(){
	var data=$.parseJSON(data);
	if(data.status=="ok"){
		alert("Login Succesfully...");
		window.location.href="#!";
	}
	else if(data.status="fail"){
		alert("Login Fial...");
		window.location.href="#!";
	}
	else{console.log(data);}

});

});