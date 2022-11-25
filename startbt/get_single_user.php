<?php include ('config.php');
$id =$_POST['id'];
$sql ="SELECT * FROM staff_register WHERE id ='$id' ";
$query =mysqli_query($conn,$sql);
$customer =mysqli_fetch_assoc($query);
echo json_encode($customer);
?>  