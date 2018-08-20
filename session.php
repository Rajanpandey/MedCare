<?php

$conn=mysqli_connect("fdb20.your-hosting.net", "2749126_socman", "rkp12345", "2749126_socman");
session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT mobile FROM users WHERE mobile = '$user_check'";

$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['mobile'];

?>
