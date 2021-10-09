<?php
require 'includes/common.php';
$id=$_GET['id'];
$uid=$_SESSION['userid'];
$q="insert into wish (user_id,item_id,wishlist) values('$uid','$id','added to like')";
mysqli_query($con,$q) or die(mysqli_error($con));
header('location:home.php');
?>
