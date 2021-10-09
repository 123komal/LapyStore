<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
$email=mysqli_real_escape_string($con,$_POST['email']);
$pwd=mysqli_real_escape_string($con,$_POST['password']);
$pwd=md5($pwd);
$q="select * from users where email='$email' and password='$pwd'";
$result=mysqli_query($con,$q);
$row=mysqli_num_rows($result);
if($row==0)
{
    if($_SESSION['index']==1)
    {$error=1;
        header('location:index.php?m3='.$error);
    }

    else if($_SESSION['index']==2)
    {$error=2;
        header('location:about.php?m3='.$error);
    }

    if($_SESSION['index']==3)
    {$error=3;
        header('location:contact.php?m3='.$error);
    }
    if($_SESSION['index']==4)
    {$error=4;
        header('location:signup.php?m3='.$error);
    }}
else
{
$r=mysqli_fetch_array($result);
$_SESSION['email']=$r['email'];
$_SESSION['userid']=$r['id'];
header('location:home.php');
}
?>