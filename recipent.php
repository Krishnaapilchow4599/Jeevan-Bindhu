<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
            <img src="https://img.freepik.com/premium-vector/happy-world-blood-donor-day-red-white-background-social-media-design-banner-free-vector_1340-21604.jpg" width="40" height="40" class="d-inline-block align-top" alt="" style="border-radius: 20px;">
            <a class="navbar-brand" href="home.html">&nbsp;&nbsp;JeevanBindhu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="login_page.html">Individual Login</a>
                <a class="nav-item nav-link" href="admin_login.html">Developers Login</a>
              </div>
            </div>
          </nav>
    </body>
</html>
    
<?php
$name=$_POST['pname'];
$age=$_POST['page'];
$gender=$_POST['pgender'];
$blood=$_POST['b_group'];
$city=$_POST['pcity'];
$pincode=$_POST['ppincode'];
$conn=mysqli_connect("localhost","root","","jeevan_bindhu");
if(!$conn)  
    {
        die("connection failed".mysqli_connect_error());
    }
else{
    $insertdata="INSERT INTO `recipient_log`( `recipient_name`, `recipient_age`, `recipient_gender`, `recipient_blood`, `recipient_city`, `recipient_pincode`) VALUES ('$name','$age','$gender','$blood','$city','$pincode')";
    $query=mysqli_query($conn,$insertdata); 
}
echo "<center><h2>List of Donor Available</h2></center";
$checkdata="SELECT * FROM donor_details WHERE donor_b_group='$blood' && donor_city='$city'";
    $search=mysqli_query($conn,$checkdata);
    if(mysqli_num_rows($search)>0){
        while($row=mysqli_fetch_assoc($search)){
            echo "<center><b>Name: {$row['donor_name']}<br>Contact Number-1: {$row['donor_phn1']}<br>Contact Number-2: {$row['donor_phn2']}</b></center>";
            echo "<br><br><br>";
        }
    }