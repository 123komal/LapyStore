<?php
 require 'includes/common.php';
 if(isset($_SESSION['email']))
 {
     header('location:home.php');
 }
 $_SESSION['index']=1;?>
<html>
    <head>
        <title> E-store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script> 
    </head>
<?php
include 'includes/header.php';
if(isset($_GET['m3']))
{
    ?>
    <script> alert("Invalid Email or password");</script>
        <?php
}?>
    <body>
                       <div class="container-fluid color">
                               <div style="margin-top:6%;" class="row">
                                <div class="col-xs-4">
                                    <div class="panel panel-default" style="margin-left:60px;">
                                        <div class="panel-heading">
                                            <h5> Laptop 1</h5>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                            <img class="img-responsive" src="images/hp14.jpg">
                                            </center>
                                            <div class="caption">
                                                <center> <h4>Rs:-63990/-</h4> </center> <h5>HP 14s Core i5 10th Gen-(8th GB/256 GB SSD/Windows 10 Home)</h5>
                                                <a href="signup.php"> <button type="button" class="btn btn-block btn-primary">Order Now!</button></a></div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> Laptop 2</h5>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                            <img class="img-responsive" src="images/HP 15q apu.jpg">
                                            </center>
                                            <div class="caption">
                                                <center> <h4>Rs:-25990/-</h4></center>
                                                <h5>HP 15q APU Dual Core A9-(4 GB/256 GB SSD/Windows 10 Home)</h5>
                                                <a href="signup.php"><button type="button" class="btn btn-block btn-primary">Order Now!</button></a>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                       <div class="col-xs-4">
                          <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> Laptop 3</h5>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                            <img class="img-responsive" src="images/ssd.jpg">
                                            </center>
                                            <div class="caption">
                                                <center><h4>Rs:-44990/-</h4></center>
                                                <h5>HP Pavillion *360 Core i3 8th Gen-(8th GB/256 GB SSD/Windows 10 Home)</h5>
                                                <button type="button" class="btn btn-block btn-primary">Order Now!</button></div>
                                            </div>
                                    </div>
                                </div>
                               </div>
                                                    <div class="row">    <div class="col-xs-4">
                                    <div class="panel panel-default" style="margin-left:60px;">
                                        <div class="panel-heading">
                                            <h5> Laptop 4</h5>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                            <img class="img-responsive" src="images/HP 14q.jpg">
                                            </center>
                                            <div class="caption">
                                                <center> <h4>Rs:-33990/-</h4>
                                                </center><h5>HP 14q Core i3 8th Gen-(8th GB/256 GB SSD/Windows 10 Home)</h5>
                                                <a href="signup.php"><button type="button" class="btn btn-block btn-primary">Order Now!</button></a>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> Laptop 5</h5>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                                <img class="img-responsive" src="images/HP 15.jpg">
                                            </center>
                                            <div class="caption">
                                                <center>    <h4>Rs:-35990/-</h4>
                                            </center>
                                            <h5>HP 15s Core i3 sth Gen-(4GB/1TB HDD/256 GB SSD/Windows 10 Home)
                                                </h5>
                                                <a href="signup.php"> <button type="button" class="btn btn-block btn-primary">Order Now!</button></a>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                                         <div class="col-xs-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> Laptop 6</h5>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                                <img class="img-responsive" src="images/Pavilion.jpg">
                                            </center>
                                            <div class="caption">
                                                <center>       <h4>Rs:-54990/-</h4> </center>
                                                <h5>HP Pavillion Gaming Ryzen 5 Quad Core-(8GB/1TB HDD/256 GB SSD/Windows 10 Home)
                                                </h5>
                                                <a href="signup.php"> <button type="button" class="btn btn-block btn-primary">Order Now!</button></a>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                       </div>
 
    </body>
        <?php
include 'includes/footer.php';
?>
</html>