<body class="bg-primary">
<div>
@include('components.navbar')

    <style>
        #map {
            height: 300px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }
    </style>
<div
    class="-z-0 relative flex flex-wrap md:flex-nowrap h-full bg-cover"
    style="background-image: url('{{$building->image->link}}')"
>
    <div class="absolute inset-0 bg-primary bg-opacity-70 z-10"></div>
    <div
        class="container mx-auto flex flex-wrap md:flex-nowrap h-auto gap-8 z-20"
    >
        <div class="w-full flex flex-col text-center md:text-start mt-16">
            <h1 class="text-white text-2xl font-bold z-20 mb-6">
                {{$building->name}}
                <br/>
                {{$building->location}}
            </h1>
            <p class="font-light text-white text-lg font-sans z-20 ">
                {{$building->description}}
            </p>

            <div class="flex mt-6 mb-6 gap-6 justify-center md:justify-start">
                <div class="text-center">
                    <button
                        onclick="window.location.href='/start-quiz/{{$building->id}}'"
                        class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-4 py-2 rounded-xl"
                    >
                        Mulai Quiz
                    </button>
                </div>
                <button
                    class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-4 py-2 rounded-xl"
                    onclick="window.location.href='{{$building->video}}'"
                >
                    Tonton Video
                </button>
            </div>
            @foreach($building->explanations as $explanation)
                <div class="mt-4 mb-4">
                    <button
                        onclick="toggleAnswer(this)"
                        class="w-full text-left bg-primary text-xl text-white px-4 py-4 rounded-lg font-medium hover:bg-opacity-90 transition duration-500 ease-in-out"
                    >
                        {{$explanation->name}}
                    </button>
                    <div
                        class="answer hidden mt-2 bg-secondary border border-gray-300 p-4 rounded-lg flex flex-col items-start"
                    >
                        @if($explanation->image()->exists())
                            <img
                                src="{{$explanation->image->link}}"
                                alt="{{$explanation->name}}"
                                class="w-full max-w-xs rounded-md mb-2 shadow-md"
                            >
                        @endif
                        <p>{{$explanation->description}}</p>
                    </div>
                </div>

                <script>
                    function toggleAnswer(button) {
                        const answerDiv = button.nextElementSibling;
                        answerDiv.classList.toggle('hidden');
                    }
                </script>

            @endforeach
            <!-- Tema 1 -->

        </div>

        <!-- Maps -->
        <div class="flex flex-col justify-start items-center mt-20 space-y-5">
            <h2 class="text-2xl font-bold text-secondary">Lokasi {{$building->name}}</h2>

            @isset($building->coordinates[0])
                <div id="map" wire:ignore style="height: 300px; width: 100%;"></div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        // Initialize the map
                        var map = L.map('map').setView([ -6.98407491356221, 110.41080280250812 ], 15);

                        // Add tile layer
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        // Define coordinates array from the Blade template
                        var coordinates = @json($building->coordinates);

                        // Loop through the coordinates and add markers
                        coordinates.forEach(function(coordinate) {
                            L.marker([coordinate.lat, coordinate.lng])
                                .addTo(map)
                                .bindPopup(coordinate.name)
                                .openPopup();
                        });
                    });
                </script>

            @else
                <h1>Lokasi Belum Tersedia</h1>
            @endisset

            <div class="container mx-auto px-4 py-8">
                <!-- Heading -->
                <h1 class="text-2xl text-secondary font-bold mb-6 text-center">
                    Tambah Ulasan dan Rating
                </h1>

                <div>

                    @if(auth()->check())
                        @livewire('RatingComponent', ['subjectId' => $building->id])
                    @else
                        <h1>Anda perlu login untuk mengakses fitur ini</h1>
                    @endif
            </div>


        </div>
            </div>
        </div>
    </div>
    <script>
        function toggleAnswer(button) {
            // Ambil div jawaban di bawah tombol
            const answerDiv = button.nextElementSibling;
            // Toggle kelas 'hidden' untuk menampilkan/menyembunyikan jawaban dengan efek transisi
            if (answerDiv.classList.contains('hidden')) {
                answerDiv.classList.remove('hidden');
                answerDiv.style.maxHeight = answerDiv.scrollHeight + "px";
                answerDiv.style.transition = "max-height 0.3s ease-in-out";
            } else {
                answerDiv.style.maxHeight = null;
                answerDiv.style.transition = "max-height 0.3s ease-in-out";
                setTimeout(() => {
                    answerDiv.classList.add('hidden');
                }, 200); // Durasi transisi 300ms
            }
        }
    </script>
    @include('components.footer')
</body>
