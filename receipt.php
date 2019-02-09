<?php
//session_start();
$book_id=$name=$email="";
include("script/conn.php");
$name=$_POST['name'];
$username=$_POST['username'];
//$id=$_SESSION['id'];
$email=$_POST['email'];

$address=$_POST['address'];
$town=$_POST['town'];
$pincode=$_POST['pincode'];

$sql="INSERT INTO `sales`(`customer_id`, `username`, `email`, `address`, `town`, `pincode`) 
VALUES (1,'$username','$email','$address','$town',$pincode)";
mysqli_query($con,$sql);
echo 'Thank you for purchasing with us!!'; 
echo 'The DVDs shall soon be delivered';
//header('location:category.php?confirm=1');
?>