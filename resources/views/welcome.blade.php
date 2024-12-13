<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz</title>
    <link rel="stylesheet" href="src/output.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map {
            height: 300px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }
    </style>
</head>
<body class="bg-primary">
<nav
    class="w-full h-20 mx-auto relative flex items-center justify-between px-8"
>
    <!-- Logo -->
    <div
        class="text-white text-lg font-bold font-['Plus Jakarta Sans'] leading-[27px]"
    >
        LOGO
    </div>
    <!-- Navbar Links -->
    <div class="flex items-center gap-8">
        <a href="#" class="text-white hover:text-secondary hover:text-opacity-50 duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2">Home</a>
        <a href="#" class="text-white hover:text-secondary hover:text-opacity-50 duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2">Tour</a>
        <a href="#" class="text-white hover:text-secondary hover:text-opacity-50 duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2">Kuliner</a>
        <a href="#" class="text-white hover:text-secondary hover:text-opacity-50 duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2">Event</a>
        <a href="#" class="text-white hover:text-secondary hover:text-opacity-50 duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2">Komunitas</a>

        <!-- Login Button -->
        <a href="#" class="ml-8 px-4 py-2 bg-[#ffd3ac]/10 rounded-[10px] text-white text-xs font-semibold font-['Plus Jakarta Sans'] leading-[18px]">Login/Sign Up</a>
    </div>
    <!-- Border -->
    <div class="absolute left-8 right-8 bottom-0 border-t-2 border-white mt-2"></div>
</nav>
<div class="relative flex flex-wrap md:flex-nowrap h-full bg-cover" style="background-image: url('src/img/semarang.png')">
    <div class="absolute inset-0 bg-primary bg-opacity-70 z-10"></div>
    <div class="container mx-auto flex flex-wrap md:flex-nowrap h-auto gap-8 z-20">
        <div class="w-full flex flex-col mt-16">
            <h1 class="text-white text-2xl font-bold z-20 mb-14">Lawang Sewu <br />Kota Semarang</h1>
            <p class="font-light text-white text-lg font-sans z-20">Gedung Lawang Sewu di Semarang merupakan ikon sejarah dan arsitektur yang penting di Indonesia...</p>
            <div class="flex mt-6 gap-6">
                <button class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-4 py-2 rounded-xl">Mulai Quiz</button>
                <button class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-4 py-2 rounded-xl">Tonton Video</button>
            </div>
        </div>
        <!-- Maps -->
        <div class="flex flex-col justify-start items-center mt-20 space-y-5">
            <h2 class="text-2xl font-bold text-secondary">Lokasi Lawang Sewu</h2>
            <div id="map"></div>
            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
            <script>
                // Initialize the map
                var map = L.map('map').setView([ -6.98407491356221, 110.41080280250812 ], 15);

                // Add tile layer
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Add markers
                var markers = [
                    {
                        lat: -6.98407491356221,
                        lon: 110.41080280250812,
                        title: "Lawang Sewu"
                    },
                    // You can add more markers with their latitude, longitude, and title
                    {
                        lat: -6.980000,
                        lon: 110.405000,
                        title: "Marker 2"
                    }
                ];

                markers.forEach(function(marker) {
                    L.marker([marker.lat, marker.lon])
                        .addTo(map)
                        .bindPopup(marker.title)
                        .openPopup();
                });
            </script>
            <div class="container mx-auto px-4 py-8">
                <h1 class="text-2xl text-secondary font-bold mb-6 text-center">Tambah Ulasan dan Rating</h1>
                <div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
                    <form id="reviewForm" class="space-y-4">
                        <div>
                            <label for="name" class="block font-semibold text-gray-700">Nama:</label>
                            <input type="text" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200" placeholder="Masukkan nama Anda" required />
                        </div>
                        <div>
                            <label for="review" class="block font-semibold text-gray-700">Ulasan:</label>
                            <textarea id="review" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200" placeholder="Tulis ulasan Anda" rows="4" required></textarea>
                        </div>
                        <div>
                            <label for="rating" class="block font-semibold text-gray-700">Rating:</label>
                            <select id="rating" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200" required>
                                <option value="" disabled selected>Pilih rating</option>
                                <option value="1">1 - Sangat Buruk</option>
                                <option value="2">2 - Buruk</option>
                                <option value="3">3 - Cukup</option>
                                <option value="4">4 - Baik</option>
                                <option value="5">5 - Sangat Baik</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-opacity-85 transition duration-300">Tambahkan Ulasan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
