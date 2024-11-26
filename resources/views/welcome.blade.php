<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SETORY</title>
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    </head>

    <body class="bg-primary">
    <div class="h-full w-full">
        <!-- Navigation -->
        <nav class="w-full h-20 mx-auto relative flex items-center justify-between px-8">
            <!-- Logo -->
            <div class="text-white text-lg font-bold font-['Plus Jakarta Sans'] leading-[27px]">
                LOGO
            </div>

            <!-- Navbar Links -->
            <div class="flex items-center gap-8">
                <a href="#" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Home</a>
                <a href="#" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Tour</a>
                <a href="#" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Kuliner</a>
                <a href="#" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Event</a>
                <a href="#" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Komunitas</a>

                <!-- Login Button -->
                <a href="#" class="ml-8 px-4 py-2 bg-[#ffd3ac]/10 rounded-[10px] text-white text-xs font-semibold font-['Plus Jakarta Sans'] leading-[18px]">
                    Login/Sign Up
                </a>
            </div>

            <!-- Border -->
            <div class="absolute left-8 right-8 bottom-0 border-t-2 border-white mt-2"></div>
        </nav>

        <!-- Hero Section -->
        <div class="mx-auto px-4">
            <!-- Hero Title -->
            <div class="container mt-6 mx-auto text-center">
                <h1 class="text-center text-[150px] font-semibold font-garamond text-secondary leading-[150px] glow">
                    SETORY
                </h1>

                <!-- Hero Description -->
                <p class="text-white text-xl font-medium font-garamond leading-1 max-w-4xl mx-auto mt-8">
                    Selamat Datang Erlangga! <br>
                    Mulai perjalanan Anda menjelajahi sejarah dan budaya Nusantara. Setory hadir untuk menghadirkan cerita dari berbagai daerah di Indonesia, dengan terus memperkaya konten agar semakin luas dan mendalam. Menyatu dengan Sejarah, Menginspirasi Masa Depan
                </p>
            </div>

            <!-- Hero Images Grid -->
            <div class="mt-2 h-[800px] w-full relative overflow-hidden">
                <div class="relative w-full h-[600px] gap-4">
                    <!-- Hotel Yamato -->
                    <img src="/hotel%20yamato.png"
                         alt="Hotel Yamato"
                         class="parallax-item absolute w-[602px] h-[700px] object-cover hover:scale-110 transition-transform duration-500 z-10"
                         style="top: -50px; left: 0;"
                         data-speed="0.5">

                    <!-- Lawang Sewu -->
                    <img src="/lawang%20sewu.png"
                         alt="Lawang Sewu"
                         class="parallax-item absolute w-[400px] h-[450px] object-cover hover:scale-110 transition-transform duration-500 -z-40"
                         style="top: 30px; left: 300px;"
                         data-speed="0.6">

                    <!-- Monas -->
                    <img src="/Monas.png"
                         alt="Monas"
                         class="parallax-item absolute w-[400px] h-[600px] hover:scale-110 transition-transform duration-500 -z-20"
                         style="top: 50px; right: 300px;"
                         data-speed="0.4">

                    <!-- Candi Prambanan -->
                    <img src="/candi prambanan.png"
                         alt="Candi Prambanan"
                         class="parallax-item absolute w-[520px] h-[620px] hover:scale-110 transition-transform duration-500 -z-50"
                         style="top: 20px; right: 0;"
                         data-speed="0.6">

                    <!-- Candi Borobudur -->
                    <img src="/candi borobudur.png"
                         alt="Candi Borobudur"
                         class="parallax-item absolute left-1/2 w-[853.50px] h-[500px] object-cover hover:scale-110 transition-transform duration-500 z-10"
                         style="top: 200px; left: 300px;"
                         data-speed="0.4">

                    <!-- Museum Jakarta -->
                    <img src="/Museum jakarta.png"
                         alt="Museum Jakarta"
                         class="parallax-item absolute w-[703px] h-[700px] right-0 object-cover hover:scale-110 transition-transform duration-500 ease-in-out -z-20"
                         style="top: 00; right: 0;"
                         data-speed="0.3">
                </div>
            </div>
        </div>

        <!-- Tour Guide Section -->
        <div class="min-h-screen flex flex-col items-center justify-center p-10 relative">
            <!-- Main content -->
            <div class="text-center z-10 mb-10">
                <h1 class="text-secondary text-[150px] font-garamond font-bold glow">Mulai Tour</h1>
                <p class="text-white font-garamond leading-9 text-lg">Jelajahi Destinasi Yang Ingin Kamu Pelajari!</p>
            </div>

            <!-- Card container -->
            <div class="flex justify-center items-center gap-1 z-10">
                <!-- Card Museum Sejarah -->
                <div class="group relative h-[400px] w-[100px] cursor-pointer transition-all duration-500 peer"
                     onclick="toggleCard(this)">
                    <img src="/Museum Sejarah, Jakarta 1.png"
                         class="h-full w-full object-cover rounded-xl"
                         alt="Museum Fatahillah">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-xl opacity-0 group-[.active]:opacity-100 transition-opacity duration-500">
                        <h3 class="text-white text-xl font-semibold mb-2">Museum Fatahillah</h3>
                        <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur. Cursus e ligend non condimentum lacus tempor.</p>
                    </div>
                </div>

                <!-- Card Bandung -->
                <div class="group relative h-[400px] w-[100px] cursor-pointer transition-all duration-500 peer"
                     onclick="toggleCard(this)">
                    <img src="/Bandung lautan api monumen.png"
                         class="h-full w-full object-cover rounded-xl"
                         alt="Tugu Monument">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-xl opacity-0 group-[.active]:opacity-100 transition-opacity duration-500">
                        <h3 class="text-white text-xl font-semibold mb-2">Tegalega Bandung</h3>
                        <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur. Cursus e ligend non condimentum lacus tempor.</p>
                    </div>
                </div>

                <!-- Card Semarang -->
                <div class="group relative h-[400px] w-[100px] cursor-pointer transition-all duration-500 peer"
                     onclick="toggleCard(this)">
                    <img src="/Tugu muda semarang.png"
                         class="h-full w-full object-cover rounded-xl"
                         alt="Monas">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-xl opacity-0 group-[.active]:opacity-100 transition-opacity duration-500">
                        <h3 class="text-white text-xl font-semibold mb-2">Tugumuda Semarang</h3>
                        <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur. Cursus e ligend non condimentum lacus tempor.</p>
                    </div>
                </div>

                <!-- Card Surabaya -->
                <div class="group relative h-[400px] w-[100px] cursor-pointer transition-all duration-500 peer"
                     onclick="toggleCard(this)">
                    <img src="/hotel yamato surabaya.png"
                         class="h-full w-full object-cover rounded-xl"
                         alt="Historic Building">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-xl opacity-0 group-[.active]:opacity-100 transition-opacity duration-500">
                        <h3 class="text-white text-xl font-semibold mb-2">Hotel Yamato</h3>
                        <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur. Cursus e ligend non condimentum lacus tempor.</p>
                    </div>
                </div>

                <!-- Card Medan -->
                <div class="group relative h-[400px] w-[100px] cursor-pointer transition-all duration-500 peer"
                     onclick="toggleCard(this)">
                    <img src="/Istana maimun medan.png"
                         class="h-full w-full object-cover rounded-xl"
                         alt="Historic Building">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-xl opacity-0 group-[.active]:opacity-100 transition-opacity duration-500">
                        <h3 class="text-white text-xl font-semibold mb-2">Istana Medan</h3>
                        <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur. Cursus e ligend non condimentum lacus tempor.</p>
                    </div>
                </div>
            </div>

            <!-- Bottom text -->
            <div class="text-center mt-10 z-10">
                <a href=""><p class="text-white font-garamond text-sm">Klik Disini Untuk Jelajah Lebih Banyak</p></a>
            </div>
        </div>

        <!-- Carousel Section -->
        <div class="mt-24 mb-96">
            <h1 class="text-secondary mb-12 text-[150px] text-center font-garamond font-bold glow my-16">Cari Kuliner</h1>
            <div class="relative overflow-x-auto mx-auto container my-24">
                <div class="flex justify-center items-center gap-8 w-max scroll-content">
                    <img src="/makanan1.jpg" alt="Kuliner 1" class="h-[422px] w-[242px] object-cover rounded-lg hover:scale-105 transition-transform">
                    <img src="/makanan2.jpg" alt="Kuliner 2" class="h-[422px] w-[242px] object-cover rounded-lg hover:scale-105 transition-transform">
                    <img src="/makanan3.jpg" alt="Kuliner 3" class="h-[422px] w-[242px] object-cover rounded-lg hover:scale-105 transition-transform">
                    <img src="/makanan4.jpg" alt="Kuliner 4" class="h-[422px] w-[242px] object-cover rounded-lg hover:scale-105 transition-transform">
                    <img src="/makanan5.jpg" alt="Kuliner 5" class="h-[422px] w-[242px] object-cover rounded-lg hover:scale-105 transition-transform">
                </div>
            </div>
        </div>
    </div>

    <script src="/js/parallax.js"></script>
    </body>
    </html>
