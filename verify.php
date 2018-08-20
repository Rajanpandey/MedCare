<?php
    $otp=$_POST['otp'];
    if($_COOKIE['otp'] == $otp){
        header("Location: registerdetails.php");
    }else{
        echo "Please enter correct OTP!";
    }
?>