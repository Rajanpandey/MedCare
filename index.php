<?php

include('session.php');

if(isset($_SESSION['login_user'])){
    header("location: home/home.php");
}

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Profile Details</title>
</head>

<body onload="session(name);">
 <nav class="navbar navbar-expand-sm bg-light sticky-top">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
    </li>
  </ul>
  
</nav>
<div id="google_translate_element" style="float: right;"></div>
 
        
  <br/><br/><br/><br/><br/>
   <div class="container">
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <form method="POST" action="connection.php">
                <div class="form-group">
                    <label for="mobile">Mobile Number:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" placeholder="Mobile Number" maxlength="10" required="">
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password" maxlength="50" required="">
                </div>                       
           
                <button type="submit" name="submit" id="login" class="btn btn-primary btn-block">Login</button>
            </form>
            <br/>
            <div id="msg"></div>
            
            <p>Not a user yet? <a href="register.php">Register Now.</a></p>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
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
