<?php
require 'includes/common.php';
$id=$_GET['id'];
$uid=$_SESSION['userid'];
$q="delete from wish where user_id='$uid' and item_id='$id'";
mysqli_query($con,$q) or die(mysqli_error($con));
header('location:home.php');
?>
