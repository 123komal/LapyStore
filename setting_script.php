<?php
require 'includes/common.php';
$old=mysqli_real_escape_string($con,$_POST['oldpassword']);
$old=md5($old);
$new= mysqli_real_escape_string($con,$_POST['newpassword']);
$pwd= mysqli_real_escape_string($con,$_POST['retype']);
$uid=$_SESSION['userid'];
$email=$_SESSION['email'];
$q="select * from users where id='$uid' and email='$email'";
$result=mysqli_query($con,$q);
$r=mysqli_fetch_array($result);
if(strcmp($old,$r['password'])!=0){
$error="<span class='red'>Incorrect Password!</span>";
header('location:setting.php?m1='.$error);
}
else if(strcmp($new,$pwd)!=0)
{
    $error="<span class='red'> Password Mismatch!</span>";
header('location:setting.php?m2='.$error);
}
 else {
     $new=md5($new);
$u="update users set password='$new'";    
mysqli_query($con,$u) or die(mysqli_error($con));
$name=$r['name'];
$success="<span>Hello $name your Password is successfully updated!<span>";
header('location:setting.php?m4='.$success); 
 }
 ?>