<?php
include("script/conn.php");
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$sql="INSERT INTO `contact_us`(`name`, `email`,`mobile`, `comment`) VALUES ('$name', '$email','$mobile', '$comment')";
mysqli_query($con,$sql);

header('location:category.php?confirm=3');

?>