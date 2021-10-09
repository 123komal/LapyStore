<?php
function check_if_added_to_wishlist($item_id)
 {
require 'includes/common.php';
$uid=$_SESSION['userid'];
$q="select * from wish where user_id='$uid' and item_id='$item_id' and wishlist='added to like'";
$result=mysqli_query($con,$q);
$row=mysqli_num_rows($result);
if($row>=1)
{
return 1;
 }
 else {
 return 0;    
 }
 
 }
?>

