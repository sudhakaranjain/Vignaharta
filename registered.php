<?php

include("script/conn.php");
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$email="";
$sql="INSERT INTO `registered`(`name`, `username`, `password`, `mobile`, `email`) VALUES ('$name', '$username', '$password', '$mobile', '$email')";
mysqli_query($con,$sql);

$sql2="SELECT * FROM registered WHERE customer_id='$id' LIMIT 1";
$result2=mysqli_query($con,$sql2);
if(mysqli_num_rows($result2)>0)
{
while($row = mysqli_fetch_assoc($result2))
{
$email=$row['email'];
}
}


header('location:register.php?confirm=1');

?>