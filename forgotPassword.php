<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title> Forgot Password page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script> 
  <style>
      .green
      {
          color:green;
      }
      .red{
          color:red;
      }
      .p
      {
         margin-top:35%;
         margin-bottom:12%;
      }
  </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container-fluid">
        <div class="col-xs-4">
    </div>
        <div class="col-xs-4">
        <div class=" panel panel-primary p">
            <div class="panel-heading">
                <h2> Password Reset</h2>
            </div>       
            <div class="panel-body">
                <form method="post" action="sendsms.php">
            <div class="form-group">
                <?php
                if(isset($_GET['m1']))
                {
                    echo $_GET['m1'];
                }
                if(isset($_GET['otp']))
                {
                    echo $_GET['otp'];
                }
                if(isset($_GET['res']))
                  {
                      echo $_GET['res'];
                  }
                ?>
                <input class="form-control" type="email" title="Enter your registered E-mail id" Placeholder="Enter Your Registered email" name="email" required>
            </div>
                    <div class="form-group">
                <input  class="form-control" type="tel" name="mobile"  placeholder="Enter Mobile No." value="" title="Enter Number on which otp has to be send" required>
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Enter Name" title="Enter Your Name" required>
            </div>
            <div class="form-group">
            <input class="btn btn-success btn-block" type="submit" name="sendotp" value="send otp">
            </div>
        </form>
        <form method="post" action="sendsms.php">
       <div class="form-group"> 
           <input type="text" class="form-control" name="otp" placeholder="Enter otp">
        </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-success" name="verify" value="verify">
                </div>
        </form>
             <?php   
                if (isset($_GET['e']))
                {
                    echo $_GET['e'];
                }
                
                    if(isset($_GET['v']))
             {
                echo $_GET['v'];
               ?>
                <form method="post" action="sendsms.php">
             <div class="form-group"> 
                 <input type="password" class="form-control" pattern=".{6,}" name="password" title="Minimum length should be 6" Placeholder="Enter New Password" required>   
             </div>
                    <div class="form-group">
                 <input type="password" name="cpwd" pattern=".{6,}" title="Minimum length should be 6" class="form-control" placeholder="Re-Type Password" required>
              </div>
                    <div class="form-group">
                        <input type="submit" name="reset" class="btn btn-primary form-control" value="Reset">
                    </div>
                        </form>
                <?php
                  
              }
?>            
            </div>
        </div>
        </div>
    </div>
    </body>
    <?php
        include 'includes/footer.php';
        ?>
</html>
