<?php

	include 'session.php';
	include 'db_connect.php';

	extract($_POST);

	$query = "UPDATE ticket SET e_id = '$e_id' WHERE t_id ='$ticket_id'";

	$result = getResult($query);

	if ($result===true) {
		echo "<header class='major'><h2>Assign Successful!<h2></header>";
	}else{
		echo "<header class='major'><h2>Assign Failed!</h2></header>";
	}

?>