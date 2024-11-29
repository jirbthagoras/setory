<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="bg-gray-900 text-white">
    <header class="py-4 px-6 flex justify-between items-center">
        <div class="text-2xl font-bold">LOGO</div>
        <nav class="space-x-4">
            <a href="#" class="hover:text-gray-400 transition duration-300">Home</a>
            <a href="#" class="hover:text-gray-400 transition duration-300">Tour</a>
            <a href="#" class="hover:text-gray-400 transition duration-300">Kuliner</a>
            <a href="#" class="hover:text-gray-400 transition duration-300">Event</a>
            <a href="#" class="hover:text-gray-400 transition duration-300">Komunitas</a>
            <a href="#" class="hover:text-gray-400 transition duration-300">Login/Sign Up</a>
        </nav>
    </header>

    <main>
        <section class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6">
            <div class="bg-cover bg-center h-64 md:h-auto" style="background-image: url('https://via.placeholder.com/800x600')">
                <div class="bg-gray-900 bg-opacity-70 h-full flex flex-col justify-center items-center">
                    <h2 class="text-2xl font-bold">Lawang Sewu</h2>
                    <p class="text-gray-400 mb-4">Kota Semarang</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-medium py-2 px-4 rounded transition duration-300">Mulai Quiz</a>
                        <a href="#" class="bg-gray-800 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded transition duration-300">Tonton Video</a>
                    </div>
                </div>
            </div>
            <div class="bg-cover bg-center h-64 md:h-auto" style="background-image: url('https://via.placeholder.com/800x600')">
                <div class="bg-gray-900 bg-opacity-70 h-full flex flex-col justify-center items-center">
                    <h2 class="text-2xl font-bold">Hotel Yamato</h2>
                    <p class="text-gray-400 mb-4">Kota Surabaya</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-medium py-2 px-4 rounded transition duration-300">Mulai Quiz</a>
                        <a href="#" class="bg-gray-800 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded transition duration-300">Tonton Video</a>
                    </div>
                </div>
            </div>
            <div class="bg-cover bg-center h-64 md:h-auto" style="background-image: url('https://via.placeholder.com/800x600')">
                <div class="bg-gray-900 bg-opacity-70 h-full flex flex-col justify-center items-center">
                    <h2 class="text-2xl font-bold">Taman Proklamasi</h2>
                    <p class="text-gray-400 mb-4">Kota Jakarta</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-medium py-2 px-4 rounded transition duration-300">Mulai Quiz</a>
                        <a href="#" class="bg-gray-800 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded transition duration-300">Tonton Video</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <h3 class="text-lg font-semibold">Travel Website</h3>
                <p class="text-sm opacity-75">&copy; 2023 Travel Website. All Rights Reserved.</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-400 transition duration-300">About</a>
                <a href="#" class="hover:text-gray-400 transition duration-300">Contact</a>
                <a href="#" class="hover:text-gray-400 transition duration-300">Privacy</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
