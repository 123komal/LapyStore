
<?php
require 'includes/common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$pwd=mysqli_real_escape_string($con,$_POST['password']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
echo $name.",".$email.",".$pwd.",".$contact.",".$city.",".$address;
$email_regex="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$q="select * from users where email='$email'";
$result=mysqli_query($con, $q);
$row=mysqli_num_rows($result);
if($row>0)
{ $error="<span class='red'>Email Already exist</span>";
    header('location:signup.php?m1='.$error);
}
else if(!preg_match($email_regex,$email))
{
    $error="<span class='red'>pattern mismatch</span>";
    header('location:signup.php?m1='.$error);
}
else
{
    $pwd=md5($pwd);
$i="insert into users(name,email,password,contact,address,city) values('$name','$email','$pwd','$contact','$address','$city')";    
$r=mysqli_query($con,$i) or die(mysqli_error($i));
    $_SESSION['email']=$email;
   $id=mysqli_insert_id($con);
 $_SESSION['userid']=$id;
 header('location:home.php');
}
?>