<?php
include 'config.php';

#first_name,last_name,department,position
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$department=$_POST['department_name'];
$position=$_POST['position'];

 $insert = "INSERT INTO staff_register(first_name,last_name,department_name,position) VALUES('$fname','$lname','$department','$position')";
 $query=  mysqli_query($conn, $insert) or die(mysqli_error($conn));

  if($query)
  {
  echo 1;
  }
  else{
    echo mysqli_error($conn);
  }
?>