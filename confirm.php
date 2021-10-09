<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}    
$user_id = $_SESSION["userid"];
        $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id' and status='added to cart'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["item_id"];
            $query_update = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$product_id'";            
        $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
if($result_update)
{
    header('location:success.php');
}
else
{
    header('location:home.php');
}
        }
    ?>
    