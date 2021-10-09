<?php
require'includes/common.php';
$_SESSION['index']=4;
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>
<html>
    <head>
                <title> Signup page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script> 
  <style>
      .red{
                color:red;
                }</style>
    </head>
    <body>
<?php
include'includes/header.php';
if(isset($_GET['m3']))
{?>
        <script>alert("Invalid Email or Password!");</script>
        <?php
} ?>
       <div class="container-fluid">
        <div style="margin-top:5%;" class="row">
            <div class="col-xs-6 col-xs-offset-1">
                <img style="width:100%; border-radius:10px;" class="img-responsive" src="images/th.jfif">
            </div>
            <div style="padding-top:-6%;" class="col-xs-3 col-xs-offset-1">
                <h1>SIGN UP</h1>
                <form action="signup_script.php" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Name" name="name" class="form-control" pattern="[a-zA-Z0-9]+[a-zA-Z0-9\s]+" title="enter a name eg:-abc or abc xyz"  required >
                </div>
                    <?php 
                    if(isset($_GET['m1']))
                    {
                        echo $_GET['m1'];
                    }
                    ?>
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" class="form-control" pattern="[a-z0-9]+@[a-z]+\.[a-z]{2,}" title="enter email eg:-abc@gmail.com" required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" title="Pls enter atleast 6 digit password" pattern=".{6,}" class="form-control" min-length="6" required>
                </div>
                <div class="form-group">
                    <input type="number" placeholder="Contact" name="contact"  class="form-control" title=" Pls enter 10 digit Valid No." required maxlength="10">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="City" name="city" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Address" name="address" class="form-control" required >
                </div>
                <input type="submit" value="Signup" class="btn btn-primary">
                </form>
            </div>
        </div>
</div>
        <?php include 'includes/footer.php';?>
    </body>
</html>