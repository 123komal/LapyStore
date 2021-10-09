<?php 
 require 'includes/common.php';
 $_SESSION['index']=2;?>
<html>
    <head>
          <title> About Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script> 
  <style>
      .red{
          color:red;
      }
  </style>
    </head>
    <body>
<?php
include 'includes/header.php';
if(isset($_GET['m3']))
{
    ?>
        <script> alert("Invalid Email or Password!");</script>
<?php
}
?>
        <div  style="margin-top:4%" class="row">
            <div class="container">
                <div class="col-xs-4">
                    <div class="panel panel-default" style="padding-left:1%;">
                        <div class="panel-heading">
                            <h4>WHO WE ARE</h4>
                        </div>
                        <div class="panel body">
                        <img src="images/who-we-are.png">
                        <p style="color:grey; margin-left:1%; text-align:justify; line-height:2;">E-store is an American electronic commerce company with
                        headquaters in Washington.It is the largest internet-based retailer in the United States
                        E-Store started as an online blog. but soon diversified. selling Laptops.
                        E-store also sends certain low endproducts liks USB cabels and other accessories.
                         E-store has seperate retail for united states.Amazon also offer certain shipping to certain other.
                        we provide genuine information about the products.
                        our site is safe and secure.</p>  </div>
                    </div>
                </div>
                <div class="col-xs-4">
                <div class="panel panel-default" style="padding-left:1%;">
                        <div class="panel-heading">
                            <h4>OUR HISTORY</h4>
                        </div>
                        <div class="panel body">
                            <p style="color:grey; margin-left:1%; text-align:justify; line-height:2;">E-store was founded in 1994 by Jeffrey P. Bezos. Jeff Bezos incorporated the company (as Cadabra) in July 1994.
                                The name E-store was founded soon after because the E-store River is the largest in the world, and the letter “E” would help the company to show up at the top of alphabetical lists. and the site went online as E-store.com in 1995.
                                The name E-store was founded soon after because the Amazon River is the largest in the world,  The one thing that made them famous was their books.
                                Their first profit was reached in the last quarter of 2001.
                                The logo itself is the company name. E-store, with an arrow below, pointing from A to Z, representing that they could provide every product in the alphabet and also customer satisfaction, as it forms a smile. Amazons headquarters is in Seattle Washington United States. 
                                A major provider of cloud computing services.
                                E-store stock was opened to the public in 1997 under the Nasdaq symbol AMZN at the price of $18.00 per share.</p>
                        </div> </div>
                </div>
                <div class="col-xs-4">
                <div class="panel panel-default" style="padding-left:1%;">
                        <div class="panel-heading">
                            <h4>OPPORTUNITIES</h4>
                        </div>
                        <div class="panel body">
                            <h6>AVAILABLE ROLE</h6> <p style="color:grey; margin-left:1%; text-align:justify; line-height:2;">E-store is hiring software developers, product and program managers, and designers to be part of the team building the future of delivery.</p>   </div> 
                </div>
            </div>        
            </div>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>