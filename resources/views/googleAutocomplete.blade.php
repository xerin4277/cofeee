<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Add Google Map in Laravel? - ItSolutionStuff.com</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 400px;
        }
    </style>
</head>
    
<body>

    <div class="container mt-5">
        <h2>How to Add Google Map in Laravel? - ItSolutionStuff.com</h2>
        <div id="map"></div>
    </div>
  
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: 8.947890, lng: 125.532333 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
          });
        }
  
        window.initMap = initMap;
    </script>
  
   
  
</body>
</html>