<?php
include('../../../session.php');
if(!isset($_SESSION['login_user'])){
    header("location: ../../../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="../../../assets/myjs/navbar.js"></script>
	<link rel="stylesheet" href="../../../assets/mycss/navbar.css">
	<title>Home</title>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light sticky-top">

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../../home.php"><i class="fas fa-home"></i>   Home</a>
  <a href="../../myprofile.php"><i class="fas fa-user"></i>   My Profile</a>
  <a href="../../myqueries.php"><i class="fas fa-question-circle"></i>   My Queries</a>
  <a href="../../logout.php"><i class="fas fa-sign-out-alt"></i>   Logout</a>
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
           <h2>Frog Care Guide</h2><hr/>
           
           <img src="../../../assets/pictures/animals/pig.jpg" width="100%">
            
<p>Guinea pigs might well be the gentlest of all pets. Happiest in small groups, these rodents are delicate but reasonably easy to care for.</p>

<p>Guinea pigs, also known as “cavies,” are rotund rodents from South America. They are affectionate and gentle, and well-suited for households with children.  However, as true herbivores that are very low on the food chain, they should be kept away from dogs, cats, ferrets, and rats.</p>

<p>Also, they cannot jump more than a couple inches into the air. Make sure they are not in danger of falling off the edges of tables, beds, stairways, or other hazards.</p>

<br/><h5>ESSENTIAL EQUIPMENT</h5>
<p>Guinea pigs don’t need much equipment:</p>
<ul>
  <li>A cage or hutch</li>
  <li>Pet-carrier</li>
  <li>Food and water dishes</li>
  <li>Bedding</li>
  <li>Nail trimmers and a brush</li>
  <li>A safe piece of fruit wood to chew</li>
  <li>A hidey hut to complete the picture</li>
</ul>

<br/><h5>EXERCISE</h5>
<p>Cavies should not use exercise wheels. Ever. Exercise wheels result in damaged backs, injured feet, and generally unhealthy Guinea pigs. Ignore the picture of the lovely wheel on the cavy cages.</p>

<p>Instead, provide a clear bit of floor for the Guinea pigs to just run around. You might even consider a play pen or an empty plastic wading pool. Some people have even started teaching their Guinea pigs to jump over very short toy horse oxers.</p>

<br/><h5>FEEDING</h5>
<p>Cavies are messy. Be prepared for them to foul their food and water dishes. A water bottle hung on the side of the enclosure is a good back-up for the water bowl.</p>

<p>Fresh grass hay must be available at all times, and good Timothy-grass-based Guinea pig pellets ought to be the main part of your pet’s meals. Why Timothy specifically? Your other choice is usually alfalfa, which is much too high in calcium. Fresh vegetables such as carrots, broccoli leaves, and radish greens will round out the diet. Vitamin C supplements are a wise precaution, because the vitamin C in the pellets loses its potency quickly. Simply put the vitamin supplement on the veggies or pellets.</p>

<br/><h5>GROOMING</h5>
<p>The nails on all the feet need to be trimmed regularly, every month or so. Many people use nail clippers that are designed for humans, for this purpose. For the first trim, it is often easiest to take the piggy to the vet, and have the vet or technician demonstrate the correct technique. In fact, some people take their cavies to the vet for every trim.</p>

<p>Guinea pigs have fur coats. These coats need to be brushed. How often this brushing is needed will depend on what kind of Guinea pig you have. The gorgeous long-haired Peruvians need to be brushed once or twice a day. The other, much-shorter-haired breeds are brushed less frequently. A “Finishing” brush intended for show cats of the appropriate fur length is quite possibly the best equipment for this task. A fine comb may also be needed, especially for the Peruvians.</p>

<br/><h5>HOME ENVIRONMENT</h5>
<p>Cavies neither climb nor jump very high, and so their enclosures do not need to be covered. As long as the walls are at least 10″/25″ tall, the Guinea pig will not get out. To avoid injury to the delicate feet, the floor should be solid plastic. Most commercial cavy cages are much too small. The piggy needs enough room to run and dig in the bedding. 10″x20″/25cm x 50cm per cavy is really the bare minimum, in terms of floor space.</p>

<p>Provide lots of bedding. The best and safest bedding is made of shredded paper. It will need to be changed every day, to maintain a healthy environment. Otherwise, the bedding will be soaked with urine and rotting vegetables. Do not use softwood shavings such as pine or cedar, because the oils from these woods are very unhealthy for your pet’s lungs.</p>

<p>A Guinea pig “hidey hut” is a nice addition to the enclosure, because it gives the piggy a place to hide when he feels nervous. He probably won’t spend much time in it.</p>

<p>Good ventilation is important, especially in warm weather. These animals do best at temperatures below 80F/27C. On very hot days, it’s a good idea to put some ice at one end of the enclosure. Of course, remember that these little guys are rodents: Be sure that whatever the ice is in, it is safe to chew.</p>

<br/><h5>TRAINING</h5>
<p>Other than the mini-jumping mentioned before, there is very little training needed for a cavy. Handle the animal gently and often, and he will be a contented and gentle companion.</p>

<br/><h5>WHERE TO NEXT?</h5>
<p>Guinea pigs are delightful pets that enjoy the company of their humans and of their fellow Guinea pigs. If you have decided that they are the right addition to your household, your next steps are to locate a veterinarian who has experience with rodents, to stock up on Guinea pig food, and to set up your cavy enclosure. Then you’re ready to adopt some adorable little rodents. Check out your local shelters and rescues!</p>          
                   
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