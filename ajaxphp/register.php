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
<script>  	
	
	$(document).ready(function(){
	 $('#btnsubmit').click(function(){
	$.ajax({
	type: "POST",
	url: 'php/register.php',
	data:{
		username: $("#username").val(),
		address: $("#address").val(),
		password: $("#password").val()
}
});
window.location.replace('index.php');
});
});
	</script>
</head>
<body>
	<h2>Register</h2>
	<a href="index.php">Home</a>
	<form>
		Username : <input type="text" name="username" id="username"><br>
		Address : <input type="text" name="address" id="address"><br>
		Password : <input type="password" name="password" id="password"><br>
	</form>
	<button id="btnsubmit">Submit</button>
</body>
</html>