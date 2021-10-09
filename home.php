<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
include 'includes/check-if-added.php';
include 'includes/check-if-like.php';
if(isset($_SESSION['email'])){
 $email= $_SESSION['email'];
 $userid=$_SESSION['userid'];
 $result=mysqli_query($con,"select name from users where id='$userid'");
$row= mysqli_fetch_array($result);
$name=$row['name'];}
?><html>
    <head>
        <style>
            .w{
                margin-top:5%; 
            }
        </style>
        <title> Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
</script>
        
  <script src="bootstrap/js/bootstrap.min.js"></script> 
    </head>
<?php
include 'includes/header.php';
?>
    <body>
        <div class="container w">
            
                <div class="jumbotron">
                    <h1>Welcome <?php echo "<b>$name</b>";?> to E-Store!</h1>
                    <p>We have the best Laptops for you.No need to hunt around we have all in one place</div>
                </div>             
        <div class="container-fluid color">
                               <div style="margin-top:4%;" class="row">
                                <div class="col-xs-4">
                                    <div class="panel panel-default" style="margin-left:60px;">
                                        <div class="panel-heading">
                                            <h5> Laptop 1
                                                <?php
                                                if(check_if_added_to_wishlist(1))
                                                {
                                                ?><a href="remove-wishlist.php?id=1"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=1"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                                
                                              
                                        </div>
                                        <div class="panel-body">
                                         <center>
                                            <img class="img-responsive" src="images/hp14.jpg">
                                            </center>   
                                            <div class="caption">
                                                <h4>Rs:-63990</h4><h5>HP 14s Core i5 10th Gen-(8th GB/256 GB SSD/Windows 10 Home)</h5>
                                            <?php
                                            if(check_if_added_to_cart(1))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=1" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> Laptop 2
                                             <?php
                                                if(check_if_added_to_wishlist(2))
                                                {
                                                ?><a href="remove-wishlist.php?id=2"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=2"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                            <img class="img-responsive" src="images/HP 15q apu.jpg">
                                            </center>
                                            <div class="caption">
                                                <h4>Rs:-25990</h4><h5>HP 15q APU Dual Core A9-(4 GB/256 GB SSD/Windows 10 Home)</h5>
                                             <?php
                                            if(check_if_added_to_cart(2))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=2" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                       <div class="col-xs-4">
                          <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> Laptop 3
                                                 <?php
                                                if(check_if_added_to_wishlist(3))
                                                {
                                                ?><a href="remove-wishlist.php?id=3"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=3"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                            <img class="img-responsive" src="images/ssd.jpg">
                                            </center>
                                            <div class="caption">
                                                <h4>Rs:-44990</h4><h5>HP Pavillion *360 Core i3 8th Gen-(8th GB/256 GB SSD/Windows 10 Home)</h5>
                                             <?php
                                            if(check_if_added_to_cart(3))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=3" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>   
                                            </div>
                                    </div>
                                </div>
                               </div>
                               </div>       <div class="row">    
                                                        <div class="col-xs-4">
                                    <div class="panel panel-default" style="margin-left:60px;">
                                        <div class="panel-heading">
                                            <h5> Laptop 4
                                                 <?php
                                                if(check_if_added_to_wishlist(4))
                                                {
                                                ?><a href="remove-wishlist.php?id=4"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=4"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                            <img class="img-responsive" src="images/HP 14q.jpg">
                                            </center>
                                            <div class="caption">
                                                <h4>Rs:-33990</h4><h5>HP 14q Core i3 8th Gen-(8th GB/256 GB SSD/Windows 10 Home)</h5>
                                             <?php
                                            if(check_if_added_to_cart(4))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=4" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?> 
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> Laptop 5
                                                 <?php
                                                if(check_if_added_to_wishlist(5))
                                                {
                                                ?><a href="remove-wishlist.php?id=5"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=5"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                                <img class="img-responsive" src="images/HP 15.jpg">
                                            </center>
                                            <div class="caption">
                                                <h4>Rs:-35990</h4>
                                                <h5>HP 15s Core i3 sth Gen-(4GB/1TB HDD/256 GB SSD/Windows 10 Home)
                                                </h5>
                                             <?php
                                            if(check_if_added_to_cart(5))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.ph?id=5" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>   
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                                         <div class="col-xs-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> Laptop 6
                                                 <?php
                                                if(check_if_added_to_wishlist(6))
                                                {
                                                ?><a href="remove-wishlist.php?id=6"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=6"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                                <img class="img-responsive" src="images/Pavilion.jpg">
                                            </center>
                                            <div class="caption">
                                                <h4>Rs:-54990</h4>                  <h5>HP Pavillion Gaming Ryzen 5 Quad Core-(8GB/1TB HDD/256 GB SSD/Windows 10 Home)
                                                </h5>
                                             <?php
                                            if(check_if_added_to_cart(6))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=6" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>  
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                           <div  class="row">
                               <div class="col-xs-4">
                                   <div style="margin-left:60px;" class="panel panel-default">
                                       <div class="panel-heading">
                                           <h5> Laptop 7
                                                <?php
                                                if(check_if_added_to_wishlist(7))
                                                {
                                                ?><a href="remove-wishlist.php?id=7"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=7"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                       </div>
                                       <div class="panel-body">
                                           <center>
                                               <img class="img-responsive" src="images/laptop7..jpeg">
                                           </center>
                                           <div class="caption">
                                               <center><h4>Rs-32500</h4></center>
                                               <h5>Avita Pura Ryzen 5 Quad Core-(8th/512 GB SSD/ Windows 10 Home in Smode)</h5>
                                           <?php
                                            if(check_if_added_to_cart(7))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=7" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                                <div class="col-xs-4">
                                   <div class="panel panel-default">
                                       <div class="panel-heading">
                                           <h5> Laptop 8
                                                <?php
                                                if(check_if_added_to_wishlist(8))
                                                {
                                                ?><a href="remove-wishlist.php?id=8"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=8"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                       </div>
                                       <div class="panel-body">
                                           <center>
                                               <img class="img-responsive" src="images/laptop8.jpeg">
                                           </center>
                                           <div class="caption">
                                               <center><h4>Rs-32600</h4></center>
                                               <h5>Avita Pura Ryzen 5 Quad Core-(8th/512 GB SSD/ Windows 10 Home in Smode)NS14A6INV561</h5>
                                           <?php
                                            if(check_if_added_to_cart(8))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=8" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                                <div class="col-xs-4">
                                   <div class="panel panel-default">
                                       <div class="panel-heading">
                                           <h5> Laptop 9
                                                <?php
                                                if(check_if_added_to_wishlist(9))
                                                {
                                                ?><a href="remove-wishlist.php?id=9"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=9"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                       </div>
                                       <div class="panel-body">
                                           <center>
                                               <img class="img-responsive" src="images/laptop9.jpeg">
                                           </center>
                                           <div class="caption">
                                               <center><h4>Rs-32990</h4></center>
                                               <h5>Lenovo ideapad 130 Core i3 7th Gen-(4GB/1TB HDD/Windows 10 Home)</h5>
                                          <?php
                                            if(check_if_added_to_cart(9))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=9" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                             
                           </div>
                           <div class="row">
                            <div class="col-xs-4">
                                   <div style="margin-left:60px;" class="panel panel-default">
                                       <div class="panel-heading">
                                           <h5> Laptop 10
                                                <?php
                                                if(check_if_added_to_wishlist(10))
                                                {
                                                ?><a href="remove-wishlist.php?id=10"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=10"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                       </div>
                                       <div class="panel-body">
                                           <center>
                                               <img class="img-responsive" src="images/laptop10.jpeg">
                                           </center>
                                           <div class="caption">
                                               <center><h4>Rs-52990</h4></center>
                                               <h5>Asus VivoBook S Series Core i5 8th gen-(8GB/1 TB HDD/256 GB SSD/Windows 10 Home)</h5>
                                           <?php
                                            if(check_if_added_to_cart(10))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=10" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            <div class="col-xs-4">
                                   <div class="panel panel-default">
                                       <div class="panel-heading">
                                           <h5> Laptop 11
                                                <?php
                                                if(check_if_added_to_wishlist(11))
                                                {
                                                ?><a href="remove-wishlist.php?id=11"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=11"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                       </div>
                                       <div class="panel-body">
                                           <center>
                                               <img class="img-responsive" src="images/laptop11.jpeg">
                                           </center>
                                           <div class="caption">
                                               <center><h4>Rs-42990</h4></center>
                                               <h5>Lenovo Ideapad S340 Core i3 10th Gen-(* GB/1 TB HDD/Windows 10 Home)
                                               S340-14IIL Thin and light Laptop.</h5>
                                           <?php
                                            if(check_if_added_to_cart(11))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=11" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            <div class="col-xs-4">
                                   <div class="panel panel-default">
                                       <div class="panel-heading">
                                           <h5> Laptop 12
                                                <?php
                                                if(check_if_added_to_wishlist(12))
                                                {
                                                ?><a href="remove-wishlist.php?id=12"> <i class="fas fa-heart fa-2x" style="color:red; float:right;"></i>
                                                </a></h5>
                                                <?php }     
                                                else
                                                {
                                                    ?>
                                                <a href="add-wishlist.php?id=12"><i class="far fa-heart fa-2x" style=" color:grey;float:right;"></i></a></h5>                                      
                                              <?php
                                                }                        
                                                 ?>
                                               
                                       </div>
                                       <div class="panel-body">
                                           <center>
                                               <img class="img-responsive" src="images/laptop12.jpeg">
                                           </center>
                                           <div class="caption">
                                               <center><h4>Rs-52990</h4></center>
                                               <h5>Acer Swift 3 Core i5 8th Gen-(8GB/512 GB SSD/Windows 10 Home/2GB Graphics)</h5>
                                           <?php
                                            if(check_if_added_to_cart(12))
                                            {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=12" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                           ?>
                                           </div>
                                       </div>
                                   </div>
                            </div></div>
                       </div>
    </body>
</html>
