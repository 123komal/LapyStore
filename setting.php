<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>Setting Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script> 
        <style>
            .w{
                margin-top:10%;
            }
           
        </style></head>
    <body>
<?php
 include 'includes/header.php';
 ?>        <div class="container w">
            <div class="col-xs-4">
            </div>
            <div style="margin-bottom:10%;" class="col-xs-4" >
                 <div class="panel panel-primary">
                     <div class="panel-heading">
                <h3 style="font-weight:bold;">Change Password</h3>
                     </div>
                     <div class="panel-body">
                <form method="post" action="setting_script.php">
            <div class=" form-group">
                <input type="password" name="oldpassword" class="form-control"  placeholder="Old Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="newpassword" class="form-control" title="enter minimum 6 digit password" pattern=".{6,}" placeholder="New Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="retype" class="form-control" placeholder="Re-type Password" required>
            </div>
                    <input type="submit" value="Change" class="btn btn-primary">
                </form>
                     </div><div class="panel-footer">
          <?php
          if(isset($_GET['m1']))
          {
              ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['m1']; ?>
            </div>
            <?php
          }
            else if(isset($_GET['m2']))
          {
              ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $_GET['m2']; ?>
            </div>
            <?php
          }
           else if(isset($_GET['m4']))
          {
              ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['m4']; ?>
            </div>
            <?php
          }
          ?></div>
                 </div>
        </div>
 </div>
  
            </body>
</html>
