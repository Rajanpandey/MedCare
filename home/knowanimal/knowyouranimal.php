<?php
include('../../session.php');

if(!isset($_SESSION['login_user'])){
    header("location: ../../index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="../../assets/myjs/navbar.js"></script>
	<link rel="stylesheet" href="../../assets/mycss/navbar.css">
	<title>Home</title>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light sticky-top">

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../home.php"><i class="fas fa-home"></i>   Home</a>
  <a href="../myprofile.php"><i class="fas fa-user"></i>   My Profile</a>
  <a href="../myqueries.php"><i class="fas fa-question-circle"></i>   My Queries</a>
  <a href="../logout.php"><i class="fas fa-sign-out-alt"></i>   Logout</a>
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
		<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
			<center><a href=""><img src="../../assets/icons/animals/icons8-dog-50.png"><br/>Dog</a><br/><br/><br/>
			<a href="animals/frog.php"><img src="../../assets/icons/animals/icons8-frog-50.png"><br/>Frog</a><br/><br/><br/>
			<a href="animals/fish.php"><img src="../../assets/icons/animals/icons8-fish-50.png"><br/>Tropical Fish</a><br/><br/><br/></center>
		</div>
		<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
			<center><a href=""><img src="../../assets/icons/animals/icons8-cat-50.png"><br/>Cat</a><br/><br/><br/>
			<a href="animals/pig.php"><img src="../../assets/icons/animals/icons8-pig-50.png"><br/>Pig</a><br/><br/><br/>
			<a href="animals/crab.php"><img src="../../assets/icons/animals/icons8-crab-50.png"><br/>Crab</a><br/><br/><br/></center>
		</div>
			
			
	</div>
</div>

</body>

<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</html>