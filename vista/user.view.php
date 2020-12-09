<?php

	require "dashboard.php";
?>
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Using MySQL and PHP with Google Maps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
        width:70%;
        position:absolute;
        margin:2% 4% 0 20%;
        border-radius: 10px;
        
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

<html>
  <body>
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(6.25184,  -75.56359),
          zoom: 15
        });
        var infoWindow = new google.maps.InfoWindow;
        const medallo={lat: 6.25184,lng:  -75.56359}
        const medallo2={lat: 6.26000,lng:  -75.56359}
        const marker = new google.maps.Marker({
          position: medallo,
          map: map,
        });
        const marker2= new google.maps.Marker({
          position:medallo2,
          map: map,
        });
        
        
          
        }      
    </script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvE6_rf0Z1ZnbmPQmT4yA2duMOdQEyc6Y&callback=initMap">
    </script>
  </body>
</html>