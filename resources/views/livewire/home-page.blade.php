<body class="bg-primary">
<div class="h-full w-full">
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Hero Section -->
    <div class="mx-auto px-4">
        <!-- Hero Title -->
        <div class="container mt-6 mx-auto text-center">

            <div class="dots-overlay"></div>

            <h1 class="text-center text-[150px] font-semibold font-garamond text-secondary leading-[150px] glow">
                SETORY
            </h1>

            <h1 class="text-center text-[60px] font-semibold font-sans text-white leading-[150px]">
                SELAMAT DATANG!

                <strong
                    class="text-center text-[60px] font-semibold font-sans text-white leading-[100px] glow">{{auth()->check() ? auth()->user()->name : "GUEST"}}</strong>
            </h1>

            <!-- Hero Description -->
            <p class="text-white text-[20px] font-medium font-sans leading-1 max-w-4xl mx-auto mt-8">
                Mari kita mulai <strong class="glow text-[25px]">PERJALANAN</strong> Anda menjelajahi sejarah dan budaya
                Nusantara. <strong class="glow text-[25px]">SETORY</strong> hadir untuk menghadirkan cerita dari
                berbagai daerah di Indonesia, dengan terus memperkaya <strong class="glow text-[25px]">KONTEN</strong>
                agar semakin luas dan mendalam. Menyatu dengan <strong class="text-[25px] glow">SEJARAH</strong>,
                Menginspirasi Masa Depan
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
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black z-50"></div>
        </div>
    </div>

    <!-- Tour Guide Section -->
    <div class="min-h-screen flex flex-col items-center justify-center p-10 relative">
        <!-- Main content -->
        <div class="text-center z-10 mb-10">
            <h1 class="text-secondary text-[150px] font-garamond font-bold glow">Mulai Tour</h1>
            <p class="text-white font-sans font-bold leading-10 text-lg">Jelajahi Destinasi Yang Ingin Kamu
                Pelajari!</p>
        </div>
        <div class="flex justify-center items-center gap-1 z-10">
            @foreach($subjects as $subject)

                @include('components.historical-card', ["subject" => $subject])

            @endforeach
        </div>

        <!-- Bottom text -->
        <div class="text-center mt-10 z-10">
            <a href="/tour"
               class="px-4 py-2 bg-[#ffd3ac]/10 rounded-[10px] text-white text-xs font-semibold font-['Plus Jakarta Sans'] text-[1rem] leading-[50px] glow">
                Lebih banyak
            </a>
        </div>
    </div>
    <div class="mt-24">
        <h1 class="text-secondary mb-12 text-[150px] text-center font-garamond font-bold glow">Cari Kuliner</h1>
        <div class="relative overflow-x-auto overflow-y-hidden mx-auto container h-[422px]">
            <div class="flex items-center justify-center gap-4 w-full">
                @foreach($culinaries as $culinary)

                    @include("components.kuliner", ["culinary" => $culinary])

                @endforeach
            </div>
        </div>
        <div class="text-center mt-10 z-10">
            <a href="/culinary"
               class="px-4 py-2 bg-[#ffd3ac]/10 rounded-[10px] text-white text-xs font-semibold font-['Plus Jakarta Sans'] text-[1rem] leading-[18px] glow">
                Lebih banyak
            </a>
        </div>
    </div>

    <div class="relative mt-16 z-10 container mx-auto" id="event">
        <!-- Judul Event -->
        <h1 class="text-[150px] text-center font-semibold font-garamond text-secondary mb-4 glow">Event</h1>
        <p class="text-3xl text-white font-medium font-garamond max-w-2xl text-center mx-auto">
            Temukan beragam acara menarik yang kami tawarkan. Dari seminar hingga bazar lokal, jadikan momen spesialmu
            lebih <strong class="glow">BERMAKNA</strong> bersama kami
        </p>
        <!-- GambarPerintilan -->
        <div>
            <img
                class="w-[200px] h-[200px] left-0 top-52 absolute rounded-[18px] glow hover:scale-110 transition-all duration-300"
                src="/asset1.png"
            />
            <img
                class="w-[200px] h-[200px] right-52 top-20 absolute rounded-[18px] drop-shadow-xl hover:scale-110 transition-all duration-300"
                src="/asset3.png"
            />
            <img
                class="w-[200px] h-[200px] top-52 right-8 absolute rounded-[18px] drop-shadow-lg hover:scale-110 transition-all duration-300"
                src="/asset2.png"
            />
        </div>

        <!-- Gambar Event -->
        <div class="relative mt-10">

            @foreach($events as $event)

                @include('components.event-card', ['event' => $event])

            @endforeach
        </div>
    </div>

    <section class="mt-20">
        <div
            class="relative h-screen flex items-center justify-center bg-cover bg-center"
            style="background-image: url('/imagecomuniy.jpg')"
        >
            <!-- Overlay Blur -->
            <div class="absolute inset-0 bg-primary bg-opacity-70"></div>

            <!-- Content -->
            <div class="relative z-10 text-center text-white px-4">
                <h1
                    class="text-8xl font-semibold font-garamond text-secondary mb-2 leading-[135px]"
                >
                    Ikuti Komunitas Kami
                </h1>
                <p class="text-3xl font-sans mb-16 leading-[45px]">
                    Diskusikan fakta sejarah unik dan temukan destinasi bersejarah
                    baru <br />
                    bersama komunitas kami
                </p>
                <button
                    onclick="window.location.href='/community'"
                    class="px-12 py-4 bg-[#6c512e] text-white font-sans text-3xl leading-10 rounded-3xl hover:bg-opacity-90 ease-in-out transition duration-300"
                >
                    Mulai
                </button>
            </div>
        </div>
    </section>

    @include('components.footer')

</div>
<script src="/js/parallax.js"></script>
</body>
