<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foursquare Map</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #map {
      height: 600px;
    }
  </style>
</head>
<body>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
  // Inicializar el mapa
  var map = L.map('map').setView([40.7128, -74.0060], 13); // Coordenadas de Nueva York como ejemplo

  // Añadir capa de mapa
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // Ejemplo de marcadores de Foursquare
  var places = [
    { name: "Place 1", lat: 40.7128, lon: -74.0060 },
    { name: "Place 2", lat: 40.712, lon: -74.005 },
    { name: "Place 3", lat: 40.713, lon: -74.007 }
  ];

  // Añadir marcadores al mapa
  places.forEach(function(place) {
    L.marker([place.lat, place.lon]).addTo(map)
      .bindPopup('<b>' + place.name + '</b>'); // Puedes personalizar el contenido de cada popup
  });
</script>

</body>
</html>
