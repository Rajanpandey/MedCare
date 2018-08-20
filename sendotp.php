<?php
    require('textlocal.class.php');

    $textlocal = new Textlocal(false, false, 'IN1azIovRo4-gGJg3UxYWbvXGBLTnULzkYIE7dnkGl');
    $mobile=$_POST['mobile'];

    $numbers = array($mobile);
    $sender = 'TXTLCL';
    $otp = mt_rand(10000, 99999);
    $message = 'Your OTP is: '.$otp;

    try {
        $result = $textlocal->sendSms($numbers, $message, $sender);
        setcookie('otp', $otp);
        echo "OTP sent successfully!";
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
?>