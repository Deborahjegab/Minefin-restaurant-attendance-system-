<?php
	require_once 'config.php';
	
	if(ISSET($_POST['update'])){
		$user_id = $_POST['id'];
		$name = $_POST['first_name'];
		$lname =  $_POST['last_name'];
		$department =  $_POST['department_name'];
		$position = $_POST['position'];
		
		mysqli_query($conn, "UPDATE `staff_register` SET `first_name` = '$name', `last_name` = '$lname', `department_name` = '$department',`position`='$position' WHERE `id` = '$user_id'") or die(mysqli_error());

		header("location: view.php");
	}
?>