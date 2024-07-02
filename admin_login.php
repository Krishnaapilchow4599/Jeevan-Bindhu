<?php
$name=$_POST['uname'];
$pwd=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","jeevan_bindhu");
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
$checkdata="SELECT *FROM admin_cred WHERE username='$name'&& password='$pwd'";
$query=mysqli_query($conn,$checkdata);
if(mysqli_num_rows($query)>0)
{
    include "admin.html";
}
else{
    echo "<script>alert('Incorrect Username or Password')</script>";
    include "admin_login.html";
}
?>