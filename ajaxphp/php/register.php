<?php
 include 'db.inc.php';

 $sql="INSERT into login (username,address,password) VALUES ('".$_POST["username"]."','".$_POST["address"]."','".$_POST["password"]."')";
 $result=$conn->query($sql);
 $conn->close();
 ?>