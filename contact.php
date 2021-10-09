<?php
require 'includes/common.php';
$_SESSION['index']=3;?>
<html>
    <head>
          <title> Contact Us Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script> 
 
    </head>
    <body>
<?php
include 'includes/header.php';
if(isset($_GET['m3']))
{?>
        <script>alert("Invalid Email or Password!");</script>
        <?php
} ?>
        
        <div class="row">
            <div class="col-xs-8 col-xs-offset-1">
                <h1 style="margin-top:8%;">LIVE SUPPORT</h1>
                <h2 style="color:grey;">24 hours|7 days a week|365 days a year Live Technical Support</h2>
                <p style="line-height:2; color:grey;">It is a long establish fact that a reader will be distracted by the readable content of a page whenlooking
                at its layout. The point of using Lorem lpsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem lpsum available
           but the majority have suffered alteration in some form.by injected humour or randomised words which don't look even slightly believable.</p></div>
            <div style="margin-top:3%;" class="col-xs-3">
                <img src="images/images.png">
                <img src="images/images.jfif">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-xs-offset-1">
                 <h1 style="margin-top:5%;">CONTACT US</h1>
                 <form method="post" action="contact_script"> 
                     <div class="form-group">  <label for="name">Name</label>
                 <input style="height:5%; border:2px solid grey; border-radius:7px;" type="text" name="name" class="btn-block">
                 </div>
                 <div class="form-group">
                     <label for="name">Email:</label>
       <input style="height:5%; border:2px solid grey; border-radius:7px;" type="email" name="email" class="btn-block">
                 </div>
                 <div class="form-group">
                     <label for="msg">Message:</label>
                     <textarea style="height:12%;border:2px solid grey; border-radius:7px;" name="msg" class="btn-block"></textarea>
                 </div>
                     <input type="submit" class="btn btn-primary">
                     </form>
                 </div>
            
            <div style="margin-top:2%;" class="col-xs-5">
                <h1>COMPANY INFORMATION</h1>
                <p>500 Lorem lpsum Dolar Sit.</p>
                <p>22-56-2-9 Sit Anmet Lorem,</p>
                <p>USA</p>
                <p>Phone 1234567890</p>
                <p>Fax (000)0000000</p>
                <p>Email abc@gmail.com</p>
                <p>Follow on Facebook Twitter</p>
            </div>
        </div>
       
    <?php
 include 'includes/footer.php';?>
    </body>
</html>
