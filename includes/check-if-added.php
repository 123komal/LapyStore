<?php
function check_if_added_to_cart($id)
{require 'includes/common.php';
$userid=$_SESSION['userid'];
$q="select * from users_items where user_id='$userid' and item_id='$id' and status='added to cart'";
$result=mysqli_query($con,$q);
if(mysqli_num_rows($result)>=1)
{
return 1;
}
else
{
    return 0;
}
}
?>
