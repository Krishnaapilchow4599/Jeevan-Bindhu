<?php
$name=$_POST['uname'];
$pwd=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","jeevan_bindhu");
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
$checkdata="SELECT *FROM login_cred WHERE Username='$name'&& Pswd='$pwd'";
$query=mysqli_query($conn,$checkdata);
if(mysqli_num_rows($query)>0)
{
    include "login_home.html";
}
else{
    echo "<script>alert('Incorrect Username or Password')</script>";
    include "login_page.html";
}
?>