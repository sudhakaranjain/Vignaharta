<?php
include("script/conn.php");
session_start();
if((isset($_SESSION['username'])) && (isset($_SESSION['id'])))
{
$cus_id=$_SESSION['id'];
$id=$_GET['book'];
echo $id;
/*$sql="INSERT INTO `wishlist`(`customer_id`, `movie_id`) VALUES ($_SESSION['id'], $id)";
mysqli_query($con,$sql);

header('location:category.php?confirm=2');
exit();
*/
$sql="INSERT INTO `wishlist`(`customer_id`, `movie_id`) VALUES ($cus_id, $id)";
mysqli_query($con,$sql);

header('location:category.php?confirm=2');
exit();
}
else{
header('location:myaccount.php?confirm=1');
}
?>