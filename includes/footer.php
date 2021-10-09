<html>
    <head>
        <style>   .a
        {
        text-decoration:none;
        color:white;}
        footer
        {margin-top:4%;
        padding:10px 95px;
        width:100%;
        margin-bottom:0px;
            background-color: rgba(0,0,0,0.75);
        }
        h3{
            color:white;
        }
        </style>
    </head>
    <footer>
        <div class="row">
            <div class="col-xs-4">
                <h3>Information</h3>
                <a class="a" href="about.php">About Us</a>
                <br>      <a class="a" href="contact.php">Contact Us</a>
            </div>
            <div class="col-xs-4">
                <h3>My Account</h3>
                <a class="a" href="signup.php">Signup</a><br>
                <a  class="modal-toggle a" href="#" data-toggle="modal" data-target="#modal">Login</a>
            </div>
            <div class="col-xs-4">
                <h3>Contact Us</h3>
                <h5 style="color:white">Contact:- +91 1230000000</h5>
            </div>
            
        </div>
    </footer>
</html>

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
                <form>
                <div class="form-group">
                    <input class="btn-block" type="email" placeholder="Email" name="email">
                </div> <div class="form-group">
                    <input  class="btn-block" type="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <input  class="btn btn-primary" type="submit">
                </div>
                </form>
                <div class="form-group">
                    <a href="#" style="text-decoration: none;">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</html>