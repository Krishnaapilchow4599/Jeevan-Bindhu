<?php
            $name=$_POST['fname'];
            $phn1=$_POST['phn1'];
            $phn2=$_POST['phn2'];
            $mail=$_POST['mail'];
            $gender=$_POST['gender'];
            $b_group=$_POST['b_group'];
            $age=$_POST['age'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $pincode=$_POST['pincode'];
            $conn=mysqli_connect("localhost","root","","jeevan_bindhu");
            if($age>20){

            if(!$conn)  
            {
            die("connection failed".mysqli_connect_error());
            }
            else{
                $insertdata="INSERT INTO `donor_details`( `donor_name`, `donor_phn1`, `donor_phn2`, `donor_mail`, `donor_gender`, `donor_b_group`, `donor_age`, `donor_city`, `donor_state`, `donor_pincode`) VALUES ('$name','$phn1','$phn2','$mail','$gender','$b_group','$age','$city','$state','$pincode')";
                $query=mysqli_query($conn,$insertdata);
                include "thank_you_donor.html";
            }
            }
            else{
                echo "<script>alert('You are not eligible for Donating blood')</script>";
                include "donor_details.html";
            }
            
            ?>