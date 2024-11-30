<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta dengan Beberapa Titik Koordinat</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
<h1>Peta dengan Beberapa Titik Koordinat</h1>
<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([51.505, -0.09], 13); // Titik pusat peta

    // Menambahkan tile layer OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Menambahkan marker untuk beberapa koordinat
    var coordinates = [
        [51.505, -0.09],  // Titik 1
        [51.515, -0.1],   // Titik 2
        [51.525, -0.12], // Titik 3
    ];

    coordinates.forEach(function(coord) {
        L.marker(coord).addTo(map)
            .bindPopup('Koordinat: ' + coord)
            .openPopup();
    });
</script>
</body>
</html>
