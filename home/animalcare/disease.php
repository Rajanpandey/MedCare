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

<style type="text/css">
center a:link i{
	color: black;
}	

center a:visited i{
    color: black;
}
</style>

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
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		  <h2>Search Diseases by Symptoms:</h2><br/>
		  <form method="POST" action="searchdisease.php">
            <div class="container">
	            <div class="row">
		            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="suddendeath">&nbsp;Sudden Death</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="trembling">&nbsp;Trembling</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="fever">&nbsp;Fever</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="difficultbreathing">&nbsp;Difficulty in Breathing</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="rapidpulse">&nbsp;Rapid Pulse Rate</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="swelling">&nbsp;Swelling in the Back</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="aggressive">&nbsp;Aggressive Behaviour</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="nasaldischarge">&nbsp;Nasal Discharge</label>
                        </div>                        
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="salivation">&nbsp;Excessive Salivation</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="stiffness">&nbsp;Muscular Stiffness</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="teethgrinding">&nbsp;Grinding Teeth</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="darkurine">&nbsp;Dark Urine</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="depressed">&nbsp;Depressed</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="lossofappetite">&nbsp;Loss of Appetite</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="vesiclesinmouth">&nbsp;Vesicles in Mouth</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="symptoms[]" value="haemorrages">&nbsp;Haemorrages</label>
                        </div>
                    </div>
                </div>
            </div>    
            &nbsp;&nbsp;&nbsp;<button type="submit" name="searchdisease" value="searchdisease" class="btn btn-outline-primary">Search Disease!</button>       
          </form>
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