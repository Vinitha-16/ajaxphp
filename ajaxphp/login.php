<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> PHP AJAX </title>
	<script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
	<div id="response"></div>
<script>  	
	
	$(document).ready(function(){
	 $('#btnsubmit').click(function(){
	$.ajax({
	type: "POST",
	url: 'php/login.php',
	data:{
		username: $("#username").val(),
		password: $("#password").val()
},
success: function(data){
if(data==='success'){
	window.location.replace("profile.php");
}
else{
	$('#response').html("<div class='alert alert-danger'>Unable to login.</div>");
}
}
});
});
});
	</script>
</head>
<body>
	<h2>Login</h2>
	<a href="index.php">Home</a>
	<form>
		Username : <input type="text" name="username" id='username'><br>
		Password : <input type="password" name="password" id='password'><br>
		
	</form>
	<button id="btnsubmit">Submit</button>
</body>
</html>