<?php
require 'includes/common.php';
if(isset($_POST['sendotp'])){
    $email= mysqli_real_escape_string($con,$_POST['email']);
$mobile= mysqli_real_escape_string($con,$_POST['mobile']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$q="select * from users where email='$email' and contact='$mobile'";
$result=mysqli_query($con,$q);    
$row=mysqli_num_rows($result);
if($row==0)
{
    $error="<span class='red'>Invalid Email or Mobile No! Pls enter registered details.</span>";
 header('location:forgotPassword?m1='.$error);   
}
else{
$_SESSION['remail']=$email;
$_SESSION['mobile']=$mobile;
require('textlocal.class.php');
$textlocal = new Textlocal(false,false,'NzA3MDcyMzQ2NDM0NTY2YjMyNzc0OTY5NTk2MjU1NjI=');
$numbers = array($mobile);
$sender = 'TXTLCL';
$otp=mt_rand(10000,99999);
$message = "Hello".$_POST['name']."This is your otp:-".$otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
   $_SESSION['otp']=$otp;
    $success="<span class='green'>otp successfully send</span>";
    header('location:forgotPassword.php?otp='.$success);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}}}
if(isset($_POST['verify']))
{
    $otp=$_POST['otp'];
    echo $_SESSION['otp'];
    if($_SESSION['otp']==$otp)
    {
        $success="<span class='green'>otp successfully verified</span>";
    header('location:forgotPassword.php?v='.$success);
        echo 'verified';
        
    }
    else
    {  $error="<span class='red'>Not Verified</span>";
           header('location:forgotPassword.php?e='.$error);
           echo 'not verified';
    }}
if(isset($_POST['reset']))
{
    $pwd= mysqli_real_escape_string($con,$_POST['password']);
    $cpwd= mysqli_real_escape_string($con,$_POST['cpwd']);
    if(strcmp($pwd,$cpwd)!=0)
    {$new="<span class='red'>Password mismatch!</span>";
        header('location:forgotPassword.php?n='.$new);
    }
    else{
   $email= $_SESSION['remail'];
   $mobile= $_SESSION['mobile'];
  $pwd=md5($pwd);
   $q="update users set password='$pwd' where email='$email' and contact='$mobile'"; 
if(mysqli_query($con,$q))
{
    header('location:forgotPassword?res=Password Changed Successfully');
}
else
{
    header('location:forgotPassword?res=Not Changed Pls Try again Latter');
}
}
}
?>
