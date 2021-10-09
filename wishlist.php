<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}

?>
<html>
    <head>
        <title>Wishlist Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script> 
         <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
</script>
          <style>
     
    table{
           margin-top:20% }
        </style>
    </head>
    <body>
              <?php include'includes/header.php';
              ?>
 
<div class="container">
   <div class="col-xs-1">
        </div>
           <table class="table table-bordered table-responsive table-striped ">
       
<?php
$uid=$_SESSION['userid'];
$q="select * from wish where user_id='$uid'";
$result=mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==0)
{
   echo "<tr><th><h1>Add to wishlist first</h1></th></tr>";
}
else {
     ?> <thead>
             <tr>
                 <th><h2>Item Number</h2></th>
                <th><h2>Item Name</h2></th>
                <th><h2>Price</h2></th>
                <th><h2>Like</h2>   </th>
            </tr>
     </thead>
            <tbody>
                <?php
while($num)
{
$row=mysqli_fetch_array($result);
$item_id=$row['item_id'];
$i="select * from items where id='$item_id'";
$r=mysqli_query($con,$i);
$row2=mysqli_fetch_array($r);
$font="<i class='fas fa-heart fa-2x' style='color:red; float:right;'></i>";
echo "<tr><td>".$row2['id']."</td><td>".$row2['name']."</td><td>".$row2['price']."</td><td>".$font."</td></tr>";
$num--;
}
?>
            </tbody>
 <?php } ?>        </table>
       </div>
        <a href="home.php" class=" glyphicon glyphicon-home btn btn-primary ">  Home</a>
       
       
    </body>
        </html>
  