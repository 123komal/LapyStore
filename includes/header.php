<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <?php
            if(!isset($_SESSION['email'])){
                ?>
            <a href="index.php" class="navbar-brand"><b>E-Store</b></a>
           <?php }
            else{
            ?>
            <a href="home.php" class="navbar-brand"><b>E-Store</b></a>
            <?php } ?> 
        <button type="button" data-toggle="collapse" class="navbar-toggle" data-target="#nav">
            <span class="icon-bar"></span>
             <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button> </div>
        <div class="collapse navbar-collapse" id="nav">
           <ul class=" nav navbar-nav navbar-right">
               <?php if(!isset($_SESSION['email'])){
               ?>
            <li> <a href="signup.php" class="glyphicon glyphicon-user">Signup</a></li>
            <li> <a href="#" class=" navbar-link glyphicon glyphicon-log-in modal-toggle" data-toggle="modal" data-target="#modal">Login</a></li>
            <li> <a href="about.php" class="glyphicon glyphicon-menu-hamburger">About Us</a></li>
              <li> <a href="contact.php" class="glyphicon glyphicon-phone">Contact Us</a></li>
           <?php } 
           else{
           ?>
              <li><a href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
              <li><a href="setting.php" ><span class="glyphicon glyphicon-user">Settings</span></a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in">Logout</span></a></li>
              <li><a href="wishlist.php"><span class="glyphicon glyphicon-heart">Wishlist</span></a></li>
                  <?php } ?>
           </ul></div>
    </div>
</nav>
<div id="modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">LOGIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">
                        &times;
                       </span>
                </button>
                
        </div>
            <div class="modal-body">
                <div class="form-group">
                    <Label>Don't have an account?<a href="signup.php">Register</a></Label>
                </div>
                <form action="login_script.php" method="post">
                    <div class="form-group">
                    <input class="btn-block form-control" type="email" pattern="[a-z0-9]+@[a-z]+\.[a-z]{2,}" title="Pls enter a valid email form" placeholder="Email" name="email" required>
                   </div> <div class="form-group">
                       <input  class="btn-block form-control" type="password" placeholder="Password" name="password"  pattern=".{6,}" title="Minimum length should be 6" required>
                </div>
                <div class="form-group">
                    <input  class="btn btn-primary" type="submit" value="Login">
                </div>
                </form>
                <div class="form-group">
                    <a href="forgotPassword" style="text-decoration: none;">Forgot Password?</a>
                </div>
            </div>
        </div>
    
</div>
</div>