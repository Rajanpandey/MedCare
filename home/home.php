<?php
include('../session.php');

if(!isset($_SESSION['login_user'])){
    header("location: ../index.html");
}
?>

<?php
$conn=mysqli_connect("fdb20.your-hosting.net", "2749126_socman", "rkp12345", "2749126_socman");

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

$sql="SELECT * FROM users WHERE mobile='$login_session'";
$result=mysqli_query($conn, $sql);
$array1 = array();
while($row=$result->fetch_array()){
         $array[]=$row;
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../assets/myjs/navbar.js"></script>
	<link rel="stylesheet" href="../assets/mycss/navbar.css">
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

<br/>

<div class="container">
	<div class="row">
    
	    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <center><h2>Welcome <?php echo $array[0]['name']; ?></h2></center>
        </div><br/><br/><br/><br/><br/>
        
		<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
			<center><a href="query/postaquery.php"><i class="fas fa-question fa-3x"></i><br/>Post a query</a><br/><br/><br/>
			<a href=""><i class="fas fa-users fa-3x"></i><br/>Meet people nearby</a><br/><br/><br/>
			<a href="animalcare/animalcare.php"><i class="fas fa-hospital fa-3x"></i><br/>Animal Care</a><br/><br/><br/></center>
		</div>
		<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
			<center><a href="chat/chat.php"><i class="fas fa-comments fa-3x"></i><br/>Get help on chat</a><br/><br/><br/>
			<a href="knowanimal/knowyouranimal.php"><i class="fas fa-info-circle fa-3x"></i><br/>Know your animal</a><br/><br/><br/>
			<a href="feedback/feedback.php"><i class="fas fa-comment-alt fa-3x"></i><br/>Feedback to government</a><br/><br/><br/></center>
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