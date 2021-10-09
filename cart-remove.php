<?php 
require'includes\common.php';
if(isset($_GET['id']))
{$id=$_GET['id'];
$user_id=$_SESSION['userid'];
$q="delete from users_items where user_id='$user_id' and item_id='$id' ";
mysqli_query($con,$q) or die(mysqli_error($con));
header('location:cart.php');
}
else
{
    $error="<span class='red'>Not removed pls check!</span>";
header('location:cart.php?m1='.$error);
            
}
?>
