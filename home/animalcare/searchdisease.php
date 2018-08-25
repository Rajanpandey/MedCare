<?php
include('../../session.php');
if(!isset($_SESSION['login_user'])){
    header("location: ../../index.html");
}
?>

<?php
$conn=mysqli_connect("fdb20.your-hosting.net", "2749126_socman", "rkp12345", "2749126_socman");

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

$symptoms = $_POST['symptoms'];
$number_of_symptoms=sizeof($symptoms);

if(empty($symptoms)){
    echo "<script type=\"text/javascript\">
    alert('No symptom is selected!');
    window.location='disease.php';
    </script>";
}

if($number_of_symptoms=='1'){
    $sql="SELECT * FROM diseases WHERE $symptoms[0]='1'";
}elseif($number_of_symptoms=='2'){
    $sql="SELECT * FROM diseases WHERE $symptoms[0]='1' AND $symptoms[1]='1'";
}elseif($number_of_symptoms=='3'){
    $sql="SELECT * FROM diseases WHERE $symptoms[0]='1' AND $symptoms[1]='1' AND $symptoms[2]='1'";
}elseif($number_of_symptoms=='4'){
    $sql="SELECT * FROM diseases WHERE $symptoms[0]='1' AND $symptoms[1]='1' AND $symptoms[2]='1' AND $symptoms[3]='1'";
}elseif($number_of_symptoms=='5'){
    $sql="SELECT * FROM diseases WHERE $symptoms[0]='1' AND $symptoms[1]='1' AND $symptoms[2]='1' AND $symptoms[3]='1' AND $symptoms[4]='1'";
}elseif($number_of_symptoms=='6'){
    $sql="SELECT * FROM diseases WHERE $symptoms[0]='1' AND $symptoms[1]='1' AND $symptoms[2]='1' AND $symptoms[3]='1' AND $symptoms[4]='1' AND $symptoms[5]='1'";
}


$result=mysqli_query($conn, $sql);
if($result==NULL){
    echo "<script type=\"text/javascript\">
    alert('No disease found!');
    window.location='disease.php';
    </script>";
}
else{
    $array = array();
    while($row=mysqli_fetch_assoc($result)){
         $array[]=$row;
    }
}
$number_of_diseases=mysqli_num_rows($result);
    
mysqli_close($conn);
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
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<h2>Your animal might be having:</h2><br/>
<table class="table">
    <thead>
      <tr>
        <th>Disease Name</th>
      </tr>
    </thead>
    <tbody>
     
<?php for($i=0; $i<$number_of_diseases; $i=$i+1){    
?>
    <tr>
        <td><?php echo $array[$i]['disease']; ?></td>
    </tr>
<?php 
}    
?>
            
    </tbody>
  </table>
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