<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> PROFILE</title>
</head>
<body>
	<h2>Profile</h2>
	<a href="index.php">HOME</a><br/>
	<?php
		include 'php/db.inc.php';
		$sql="SELECT * from login";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		echo "Username: ".$row["username"]."<br/>";
		echo "Address : ".$row["address"]."<br/>";
	?>
</body>
</html>