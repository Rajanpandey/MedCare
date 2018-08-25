<!DOCTYPE html>
<html>
   
   <head>
      <script src = "https://maps.googleapis.com/maps/api/js"></script>
      
      <script>
         function loadMap() {
			
            var mapOptions = {
               center:new google.maps.LatLng(21.240092, 81.648563),
               zoom:13
            }
				
            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
            
            var marker1 = new google.maps.Marker({
               position: new google.maps.LatLng(21.228382, 81.651015),
               map: map,
            });
            
            var marker2 = new google.maps.Marker({
               position: new google.maps.LatLng(21.234841, 81.653758),
               map: map,
            });
             
            var marker3 = new google.maps.Marker({
               position: new google.maps.LatLng(21.239347, 81.665811),
               map: map,
            });
             
            var marker4 = new google.maps.Marker({
               position: new google.maps.LatLng(21.240995, 81.666930),
               map: map,
            });
             
            var marker5 = new google.maps.Marker({
               position: new google.maps.LatLng(21.237296, 81.644880),
               map: map,
            });
             
            var marker6 = new google.maps.Marker({
               position: new google.maps.LatLng(21.235782, 81.638818),
               map: map,
            });
             
            var marker7 = new google.maps.Marker({
               position: new google.maps.LatLng(21.246276, 81.673968),
               map: map,
            });
             
            var marker8 = new google.maps.Marker({
               position: new google.maps.LatLng(21.238405, 81.634378),
               map: map,
            });
             
            var marker9 = new google.maps.Marker({
               position: new google.maps.LatLng(21.252298, 81.664333),
               map: map,
            });
             
            var marker10 = new google.maps.Marker({
               position: new google.maps.LatLng(21.252331, 81.668195),
               map: map,
            });
            
         }
      </script>
      
   </head>
   
   <body onload = "loadMap()">
      <div id = "sample" style = "width:; height:;"></div>
   </body>
   
<script>
    var w=window.innerWidth;    
    var h=window.innerHeight;    
    document.getElementById("sample").style.height=w+"px";
    document.getElementById("sample").style.height=h+"px";
</script>
</html>