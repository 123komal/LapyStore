<?php
require 'includes/common.php';
$id=$_GET['id'];
$userid=$_SESSION['userid'];
$q="insert into users_items(user_id,item_id,status) values('$userid','$id','added to cart')";
mysqli_query($con,$q) or die(mysqli_error($con));
header('location:home.php');
?>

