<!doctype html>
<html>
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
  <br/>
   <div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <form method="post" action="storelogininfo.php">               
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Full Name" maxlength="20" required="">
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter a strong password" maxlength="50" required="">
                </div>   
                
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" value="" placeholder="Enter your address" maxlength="200" required="">
                </div>               
     
                <div class="form-group">
                    <label for="profiletype">Profile Type:</label>
                    <div class="radio">
                      <label><input type="radio" name="profiletype" value="Animal Owner" checked>  I am an animal owner</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="profiletype" value="Medical Professional">  I am a medical professional</label>
                    </div>
                </div>              
           
                <button type="submit" name="register" value="register" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>  
  </div>  
</body>

<script>
$(document).ready(function() {
    $("#otpdiv").hide(); 
});
</script>

</html>
