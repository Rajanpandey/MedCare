<?php
session_start(); 

    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    
    $conn=mysqli_connect("fdb20.your-hosting.net", "2749126_socman", "rkp12345", "2749126_socman");
    $query = "SELECT mobile, password FROM users WHERE mobile='$mobile'";
    $result = mysqli_query($conn, $query);
    $array = array();
        
     while($row = mysqli_fetch_assoc($result)){
         $array[] = $row;
     }     

    if($mobile==$array[0]['mobile']){
        if($password==$array[0]['password']){
            $_SESSION['login_user'] = $mobile;
            header("location: home/home.php"); 
        }
    } 
    mysqli_close($conn);

?>
