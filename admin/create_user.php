<!-- SJSU CMPE 180B Spring 2019 TEAM4 -->
<?php

	include '../util/session.php';
	include '../util/db_connect.php';

	extract($_POST);

	$query = "INSERT INTO customer VALUES ('$userid',MD5('$password'),'$name','$phone','$email')";

	$result = getResult($query);

	if ($result==true) {
		echo "<header class='major'><h2>Create User Successful!<h2></header>";
	}else{
		echo "<header class='major'><h2>Create User Failed!</h2></header>";
	}

?>