<?php
require 'includes/common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$msg=mysqli_real_escape_string($con,$_POST['msg']);
echo "<div><center><span class='green'><h1>Hello $name Your $msg is recorded We will respond you via your $email (email)<br> Thankyou for contacting Us</h1></span></center></div>";
?>
<html>
    <head>
        <style>
            div{
               margin-top:20%;
            }
 
            .green
            {
                color:green;
            }
        </style>
    </head>
    <body>
        <button class=" btn btn-success"><a href="contact.php">Ok</a></button>
    </body>
</html>