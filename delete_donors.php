<?php
$name=$_POST['name'];
$phn=$_POST['number'];
$conn=mysqli_connect("localhost","root","","jeevan_bindhu");
if(!$conn)  
    {
        die("connection failed".mysqli_connect_error());
    }
else{
    $checkdata="DELETE FROM 'donor_details' WHERE 'donor_name'=$name and 'donor_phn1'=$phn";
    $search=mysqli_query($conn,$checkdata);
    echo "sucessfully deleted the Donor!!!";
    include "admin.html";
}
?>