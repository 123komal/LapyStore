<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>Cart Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script> 
        <style>
     .red
     {
         color:red;
     }
            
    table{
           margin-top:20%; }
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
          $q="select * from users_items where user_id='$uid'";
         $result= mysqli_query($con,$q);
         $row=mysqli_num_rows($result);
         if($row==0)
         {
             echo "<tr><th><h1>Add to cart to First</h1></th></tr>";
         //header('location:home.php');
         }
 else {
     ?> <thead>
             <tr>
                 <th><h2>Item Number</h2></th>
                <th><h2>Item Name</h2></th>
                <th><h2>Price</h2></th>
                <th>   </th>
            </tr>
     </thead>
            <tbody>
<?php                $sum=0;
                while($row)
                {   
                 $r=mysqli_fetch_array($result);
                $id=$r['item_id'];
                $query="select * from items where id='$id'";
               $re=mysqli_query($con, $query);
                $a=mysqli_fetch_array($re);
                $sum=$sum+$a['price'];
            $row--;
                echo "<tr><td>" . "#" . $r['item_id'] . "</td><td>" . $a['name'] . "</td><td>Rs " . $a["price"] . "</td><td><a href='cart-remove.php?id={$r['item_id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";    
    }
     echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='confirm.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
     
                
               
    ?>        </tbody>
 <?php } ?>        </table>
          <?php
          if(isset($_GET['m1']))
           {
           echo $_GET['m1'];}
       ?>
           </div>
        <a href="home.php" class=" glyphicon glyphicon-home btn btn-primary "> Home</a>
       
    </body>
</html>
