<?php
include('../../session.php');
if(!isset($_SESSION['login_user'])){
    header("location: ../../index.php");
}
?>


<?php
$conn=mysqli_connect("fdb20.your-hosting.net", "2749126_socman", "rkp12345", "2749126_socman");

//Used mysqli_real_escape_string o avoid apostrophe conflicts
$title=mysqli_real_escape_string($conn,trim($_POST['title']));
$body=mysqli_real_escape_string($conn,trim($_POST['body']));

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
    $new_url=friendly_seo_string($title);                                
    $counter=1;		
    $intial_url=$new_url;	
    
    while(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM queries WHERE url ='$new_url'" ))){	          
        $counter++;        
        $new_url="{$intial_url}-{$counter}"; 
        //If the url already exists for some other article then put a number (-2, -3...etc) infront of it
    }      
    
    $mobile=$array[0]['mobile'];
    $sql="INSERT INTO queries (mobile, title, body, url) VALUES ('$login_session', '$title', '$body', '$new_url')";
    if(mysqli_query($conn, $sql)){
        echo "<script type=\"text/javascript\">
        alert('Your query has been posted!');
        window.location='postaquery.php';
        </script>";
    } else {
        echo "Error".$sql."<br>".$conn->error;
    }      
}          
                
//Function to generate SEO friendly url
function friendly_seo_string($vp_string){   														
    $vp_string = trim($vp_string);														
    $vp_string = html_entity_decode($vp_string);														
    $vp_string = strip_tags($vp_string);														
    $vp_string = strtolower($vp_string);														
    $vp_string = preg_replace('~[^ a-z0-9_.]~', ' ', $vp_string);														
    $vp_string = preg_replace('~ ~', '-', $vp_string);														
    $vp_string = preg_replace('~-+~', '-', $vp_string);												
    return $vp_string;
						
}        

mysqli_close($conn);
?>
