<?php
include('../session.php');
if(!isset($_SESSION['login_user'])){
    header("location: ../index.php");
}
?>

<?php
$conn=mysqli_connect("fdb20.your-hosting.net", "2749126_socman", "rkp12345", "2749126_socman");

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

$url=$_GET["url"];
$sql="SELECT * FROM notices WHERE url='$url'";
$result=mysqli_query($conn, $sql);
if($result!=NULL){
    $array = array();
    while($row=mysqli_fetch_assoc($result)){
         $array[]=$row;
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="../assets/myjs/navbar.js"></script>
	<link rel="stylesheet" href="../assets/mycss/navbar.css">
	<title>Home</title>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light sticky-top">

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php"><i class="fas fa-home"></i>   Home</a>
  <a href="myprofile.php"><i class="fas fa-user"></i>   My Profile</a>
  <a href="myqueries.php"><i class="fas fa-question-circle"></i>   My Queries</a>
  <a href="logout.php"><i class="fas fa-sign-out-alt"></i>   Logout</a>
</div>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link"><i class="fas fa-bars button-collapse" onclick="openNav()"></i></a>
    </li>
  </ul>  
</nav>
<div id="google_translate_element" style="float: right;"></div>

<br/><br/><br/>
<div class="container">
	<div class="row">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
           <h2><?php echo $array[0]['title']; ?></h2><hr/>
            <p><?php echo $array[0]['body']; ?></p>
            <br/><br/><br/>       
       </div>
    </div>
</div>
            
        
<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>

<br/><br/>
</body>

<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</html>