<?php
$name=$_POST['uname'];
$pwd=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","jeevan_bindhu");
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
$checkdata="SELECT *FROM login_cred WHERE Username='$name'";
$query=mysqli_query($conn,$checkdata);
if(mysqli_num_rows($query)>0)
{
    echo "<script>alert('username is in use')</script>";
    include "register.html";
}
else{
    
    $checkdata1="INSERT INTO `login_cred`(`Username`, `Pswd`) VALUES ('$name','$pwd')";
    $query1=mysqli_query($conn,$checkdata1);
    include "registration_details.html";
}
?>
