<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>Success Page</title>
        <style>
            .k{
                
                margin-top:15%;
            }
</style>
        <title>Success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <?php
include 'includes/header.php';
require 'confirm.php';
?>

  <center>
                    <div class="k">
                        <h1 class="glyphicon glyphicon-ok" style="color:green">Your Order Is Confirmed</h1><br>
                <h3 style="color:blue" class="glyphicon glyphicon-thumbs-up">Thankyou For Shoping</h3><br>
                <h4><a href="home.php">Click Here</a>to purchase any other items.</h4>
                    </div>
  </center>
</body>
</html>