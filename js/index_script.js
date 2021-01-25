$("#form").submit(function(event){
	var id = $("#id").val();
	var pass = $("#password").val();
	if (id === "admin" && pass === "admin"){

		$("form").attr("action", "dashboard.php");
	}
	else {
		alert("Invalid Login Credentials!");
	}
});
$("#logOut").submit(function(event){
		$("logOut").attr("action", "index.php");
});
