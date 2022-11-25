<?php
include "dao.php";
$name = $_POST['first_name'];
$brand = $_POST['last_name'];
$price = $_POST['department_name'];
$cat = $_POST['position'];
$pid = $_POST['id'];

$query = mysqli_query($conn, updateProduct($name, $brand, $price, $cat, $pid)) or die(mysqli_error($conn));
if ($query) {
    echo 1;
} else {
    echo mysqli_error($conn);
}
