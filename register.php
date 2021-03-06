<!doctype html>
<html>

<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Register</title>	
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light sticky-top">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php"><i class="fas fa-arrow-left"></i></a>
    </li>
  </ul>  
</nav>
<div id="google_translate_element" style="float: right;"></div>
 
  <br/><br/><br/><br/><br/>
   <div class="container">
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
         
             
                <div class="form-group">
                    <label for="mobile">Mobile Number:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" placeholder="Enter a valid mobile number" maxlength="10" required="">
                </div>
                
                <button type="submit" id="sendotp" class="btn btn-info btn-block">Send OTP</button>
                <div id="msg1"></div>
         
                
              <div id="otpdiv">
                <div class="form-group">
                    <label for="otp">OTP:</label>
                    <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
                </div>
                <button type="submit" id="verifyotp" class="btn btn-primary btn-block">Verify</button>
              </div>
                <div id="msg2"></div>
    
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

<script>
$('#sendotp').click(function() {
    var val = $('#mobile').val();
    $.ajax({
        type: 'POST',
        url: 'http://medhelp.mypressonline.com/sendotp.php',
        data: { mobile: val }, 
        success: function(response) {
            $('#msg1').html(response);
        }
    });
});
    
$('#verifyotp').click(function() {
    var val = $('#otp').val();
    $.ajax({
        type: 'POST',
        url: 'http://medhelp.mypressonline.com/verify.php',
        data: { otp: val },
        success: function(response) {
            $('#msg2').html(response);
        }
    });
});
</script>

</html>
