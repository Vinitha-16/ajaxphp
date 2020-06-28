<?php
 include 'db.inc.php';
 

 $sql="SELECT * from login where username='".$_POST["username"]."' and password='".$_POST["password"]."'";
 $result=$conn->query($sql);
 //$row=mysqli_fetch($result);
 if($result->num_rows>0){

 	echo "success";
 }else{
 	echo "fail";
 }