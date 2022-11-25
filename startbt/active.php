<?php
include('config.php');
$id=$_GET['id'];
$status = $_GET['status'];
$q="update staff_register set status=$status  where id=$id";
mysqli_query($conn,$q);
header('location:try.php');
?>