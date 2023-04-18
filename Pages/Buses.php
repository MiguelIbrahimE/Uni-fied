<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bus Connections - UULebanon </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
 <link rel="stylesheet" href="../CSS/Busses.css" />
 <link rel="icon" href="../logo-no-background.png">
  <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
 <style>
    #map {
      height: 100%;
      width: 100%;
    }
    
    @media (min-width: 368px) {
      #map {
        height: 500px;
        z-index: 1;
      }
    }
  </style>
</head>
<body>
<?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>


  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.min.js"></script> 

  <br>
  <br>
  <br>
  <br>
  <div style="width:100%">
    <div style="width:50%;float:left;">
  
  <div id="map"></div>
  
  <script src="https://d3js.org/d3.v7.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
  <script>
   // Set up Leaflet map
var map = L.map('map').setView([33.8547, 35.8623], 9);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
  maxZoom: 18,
  tileSize: 512,
  zoomOffset: -1
}).addTo(map);

// Load bus route data
d3.json('bus-routes.json').then(function(data) {
  // Add each route to the map as a polyline
  data.forEach(function(route) {
    L.polyline(route.path, { color: route.color, weight: 2 }).addTo(map);
  });

  // Create dropdown menu of bus routes
  var select = d3.select('#route-select');
  select.append('option').attr('value', '').text('Select a bus route...');
  data.forEach(function(route) {
    select.append('option').attr('value', route.name).text(route.name);
  });

  // Highlight selected bus route on the map
  select.on('change', function() {
    // Clear any previous selections
    d3.selectAll('.highlight').classed('highlight', false);
    // Get the selected route name
    var routeName = this.value;
    if (routeName) {
      // Highlight the selected route on the map
      d3.select('polyline[title="' + routeName + '"]').classed('highlight', true);
    }
  });
});
  
  </script>
  </div>
  
  <div style="text-align: center;">
    <h2>Legend:</h2>
    <ul>
      <li style="color:red">Bus 5 Route: Hamra - Ain Saade</li>
      <li style="color:blue">Bus 2 Route: Hamra - Antelias</li>
      <li style="color:darkorange">Bus 12 Route: Hamra - Haret Hreik</li>
      <li style="color:black">Bus - Jebil Route: Dawra - Jbeil</li>
      <li style="color:green">Bus Tripoli (Trablous) Route: Dawra - Jbeil - Tripoli</li>
      <li style="color:purple">Bus Sidon (Saida) Route: Cola - Sidon</li>
      <li style="color:grey">Bus Niha Route: Cola - Deir Al Qamar - Mokhtara - Niha</li>
      <li style="color:darkred">Bus Baalbek  Route: Cola - Zahle - Baalbek</li>
      <li style="color:darkcyan">Bus Tyre Route: Kuwait Embassy - Tyre</li>
    
    </ul> 
  </div>
</div>
</body>
</html>
