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
           
           <img src="../../../assets/pictures/animals/frog.jpg" width="100%">
            
<p>Frogs make truly amazing pocket pets but keeping them happy, healthy and content requires the right home environment and diet.</p>

<p>Having wriggled their way into our hearts with their huge eyes and goofy grins, frogs are popular and endearing pets. They’ve come a long way from the bullfrog races and practical jokes of nineteenth-century schoolchildren. Now, it is almost easy to produce a comfortable and homelike frog habitat in a terrarium in your own home.</p>

<p>Cleaning the terrarium and feeding the frog are not so easy, but if you choose your frog carefully, your pet can live with you happily for more than twenty-five years.</p>

<h5>ESSENTIAL EQUIPMENT</h5>
<p>Setting up a wonderful habitat for your first frog is easy these days, because the pet supply houses have come up with everything you need:</p>

<p>Glass terrarium with canopy (cover) and light. For many kinds of frogs, you’ll be looking for a terrarium that opens in the front and has a secure latch. For some other types of frogs, a tank that opens at the top, and has two sections (one for water and one for land) is the way to go. The two-section tanks can be made from a regular aquarium: fit a piece of glass inside as a divider, and secure with clear aquarium caulking. Sand the top of the divider so that it has no sharp edges, before sliding it in. There are a few pet frogs that are entirely aquatic, and a large fish tank will do nicely for them;
Artificial lighting, which should fit into the canopy of the terrarium. Many kinds of frog require some ultraviolet-B (UVB) light, in addition to regular light.
Substrate materials: aquarium sand or gravel, mulch-like material, pebbles, or peat moss. The best kind of substrate will depend on the kind of frog you are planning to house. Treefrogs will need mulch and sand, for example;
Water dish, if the frog is not entirely aquatic;
Plants, rocks, and branches – real and fake – for shelter and climbing;
Water filter, if there is more than a dish of water being used;
Thermometer and hygrometer (it measures humidity, not needed for entirely-aquatic frogs);
Submersible aquarium heater and/or under-tank heating pad (necessary for some frogs, not needed for others);
Water pump and fake water fall, or ‘mist maker’ (optional for some species, and vital for others);
Housing for the frog’s food;
Hidey-huts; and
Critter-carrier, for vet visits, quarantines, and a place to put the frogs while you clean the main tank.</p>
EXERCISE
<p>There should be enough room in the terrarium to allow the frogs to jump around, and enough items to climb to keep the little creatures busy. That said, some types of frog will sit like the proverbial lump on a log between feedings. If the terrarium is set up correctly for the species and number of individuals living inside, don’t worry about how much exercise they are getting.</p>

            <h5>FEEDING</h5>
<p>Fresh, clean water needs to be available at all times. The same places that sell terrarium supplies carry an assortment of perfect water dishes and ‘wading pools’ for frogs. Buy at least two, so that a clean one can be in the terrarium while the other one is being washed. A bottle of water conditioner is useful for neutralizing some of the common chemicals in tap water.</p>

<p>Generally speaking, frogs are carnivores (meat-eaters) that eat their food while it is still alive. Crickets, various types of worms, caterpillars, moths, and fly larvae are all standard fare. Some of the larger frogs also eat mice, other frogs, and fish.  For some species of frog, the rule is: “If it is alive and fits in the mouth, it is lunch”. Many pet stores sell worms, crickets, and so on. They can usually also provide the enclosures, substrates, and food for these creatures.</p>

    <h5>GROOMING</h5>
<p>Cleanliness is vital when dealing with frogs. They absorb substances through their skin. For example, if you have lotion on your hands, it could poison your frog. Always, always, always wash your hands before handling your frog, and have an extra rinse after you think the soap is gone.</p>

<p>For your own sake, wash your hands after handling your frog, and after cleaning the terrarium, too.</p>

<p>Your frog will slough (shed) skin from time to time. If he seems to be having trouble or if it takes longer than usual, consult your vet.</p>

    <h5>HOME ENVIRONMENT</h5>
<p>Pet frogs spend most or all of their time in their terrarium. The terrarium must be kept out of direct sunlight. Keep it away from the kitchen, because certain of the fumes from cooking can hurt your frog. Likewise, if anyone in your family uses aerosol products (spray paints for hobbies, hair spray, and so on), keep the terrarium away from the areas where these are used. Other than that, frogs can live quite happily in any home.</p>

    <h5>TRAINING</h5>
<p>It isn’t really a good idea to handle frogs much. Handling them is hard on their delicate little bodies. These pets are the kind you watch, rather than the kind you play with. Therefore, training isn’t needed.</p>

    <h5>REGULATION and LICENSING</h5>
<p>Some states might require a license to own a pet frog. Make sure to check the laws and regulations before you decide what kind of frog is legal to own in your area.</p>

<p>If you considering a move interstate in the future be sure to check the license restrictions for keeping frogs in your destination state. The classification systems vary significantly between jurisdictions and a frog that is legal in your home state may not be legal or require a very different license type in another state. The last thing you want is to have to say goodbye to ‘Frogger’ because you are no longer able to keep him.</p>

    <h5>WHERE TO NEXT?</h5>
<p>Now that you’ve decided that a frog is the right pet for your family, what is the next step? Go to the licence site that was mentioned above, and check out the requirements. Then read about the kinds of frogs that are legal with a beginner’s licence. Choose a variety of frog, start setting up an enclosure, and track down a local vet who treats frogs.</p>

<p>Get ready to bring a frog into your family.</p>


            
                   
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