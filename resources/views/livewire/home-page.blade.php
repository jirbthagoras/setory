<body class="bg-primary">
<div class="h-full w-full">
    <!-- Navigation -->
    @include('navbar')

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

                <strong class="text-center text-[60px] font-semibold font-sans text-white leading-[100px] glow">{{auth()->check() ? auth()->user()->name : "GUEST"}}</strong>
            </h1>

            <!-- Hero Description -->
            <p class="text-white text-[20px] font-medium font-sans leading-1 max-w-4xl mx-auto mt-8">
                Mari kita mulai <strong class="glow text-[25px]">PERJALANAN</strong> Anda menjelajahi sejarah dan budaya Nusantara. <strong class="glow text-[25px]">SETORY</strong> hadir untuk menghadirkan cerita dari berbagai daerah di Indonesia, dengan terus memperkaya <strong class="glow text-[25px]">KONTEN</strong> agar semakin luas dan mendalam. Menyatu dengan <strong class="text-[25px] glow">SEJARAH</strong>, Menginspirasi Masa Depan
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
    <div id="tour" class="min-h-screen flex flex-col items-center justify-center p-10 relative">
        <!-- Main content -->
        <div class="text-center z-10 mb-10">
            <h1 class="text-secondary text-[150px] font-garamond font-bold glow">Mulai Tour</h1>
            <p class="text-white font-sans font-bold leading-9 text-lg">Jelajahi Destinasi Yang Ingin Kamu Pelajari!</p>
        </div>
        <div class="flex justify-center items-center gap-1 z-10">
            @foreach($subjects as $subject)

                @include('historical-card', ["subject" => $subject])

            @endforeach
        </div>

        <!-- Bottom text -->
        <div class="text-center mt-10 z-10">
            <a href=""><p class="text-xl text-white font-garamond text-sm">Klik disini untuk menjelajah lebih banyak</p></a>
        </div>
    </div>
    <div class="mt-24">
        <h1 class="text-secondary mb-12 text-[150px] text-center font-garamond font-bold glow">Cari Kuliner</h1>
        <div class="relative overflow-x-auto overflow-y-hidden mx-auto container h-[422px]">
            <div class="flex items-center justify-center gap-4 w-full">
                @foreach($culinaries as $culinary)

                    @include("kuliner", ["culinary" => $culinary])

                @endforeach
            </div>
        </div>
        <h1 class="text-white text-center pt-10 text-lg font-semibold font-sans leading-7">Klik Disini Untuk Jelajah Lebih Banyak</h1>
    </div>

    <div class="relative mt-16 z-10 container mx-auto">
        <!-- Judul Event -->
        <h1 class="text-[150px] text-center font-semibold font-garamond text-secondary mb-4 glow">Event</h1>
        <p class="text-3xl text-white font-medium font-garamond max-w-2xl text-center mx-auto">
            Temukan beragam acara menarik yang kami tawarkan. Dari seminar hingga bazar lokal, jadikan momen spesialmu lebih bermakna bersama kami
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

                @if($event->id & 2 != 0)
                    <div class="flex justify-center items-center gap-6 mx-auto container mt-8">
                        <img src="{{$event->image->link}}" alt="Main Event" class="h-[319px] rounded-3xl shadow">
                        <div class="h-[319px] w-96 rounded-3xl">
                            <h1 class="text-4xl text-start font-garamond font-bold glow text-white">Museum Jakarta</h1>
                            <h2 class="text-start font-bold font-sans glow text-white mt-2">Lokasi: Semarang </h2>
                            <p class="text-xl mt-2 text-white text-start font-garamond">Ini kokokokokokok kokokokokoko kokokokokokoko adalah Museum Jakarta yang ada di semarang</p>
                        </div>
                    </div>
                @else
                    <div class="flex justify-center items-center gap-6 mx-auto container mt-8">
                        <div class="h-[319px] w-96 rounded-3xl">
                            <h1 class="text-4xl text-start font-garamond font-bold glow text-white">Museum Jakarta</h1>
                            <p class="text-xl mt-2 text-white text-start font-garamond">Ini kokokokokokok kokokokokoko kokokokokokoko adalah Museum Jakarta yang ada di semarang</p>
                        </div>
                        <img src="{{$event->image->link}}" alt="Main Event" class="h-[319px] rounded-3xl shadow">
                    </div>
                @endif

            @endforeach
        </div>

        <!-- Gambar Perintilan -->
        <div class="mt-23">
            <img
                class="w-[200px] h-[200px] left-64 absolute rounded-[18px] glow hover:scale-110 transition-all duration-300"
                src="/asset4.png"
            />
            <img
                class="w-[200px] h-[200px] right-32  absolute rounded-[18px] drop-shadow-xl hover:scale-110 transition-all duration-300"
                src="/asset5.png"
            />
        </div>
    </div>

</div>
<script src="/js/parallax.js"></script>
</body>
