<?php
$name=$_POST['fname'];
$phn=$_POST['num'];
$mail=$_POST['mail'];
$gender=$_POST['Gender'];
$conn=mysqli_connect("localhost","root","","jeevan_bindhu");
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else{
    $insertdata="INSERT INTO `register_details`(`name`, `phn_no`, `mail_id`, `gender`) VALUES ('$name','$phn','$mail','$gender')";
    $query=mysqli_query($conn,$insertdata);
    include "login_page.html";
}
?>