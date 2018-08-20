<?php
$conn=mysqli_connect("fdb20.your-hosting.net", "2749126_socman", "rkp12345", "2749126_socman");

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

$url=$_GET["url"];

$sql="DELETE FROM queries WHERE url='$url'";
if($result=mysqli_query($conn, $sql)){
    echo "<script type=\"text/javascript\">
    alert('The query has been deleted!');
    window.location='myqueries.php';
    </script>";
}else{
    echo "<script type=\"text/javascript\">
    alert('Sorry, couldn't delete. Please Try Again.');
    window.location='myqueries.php';
    </script>";
}

mysqli_close($conn);
?>