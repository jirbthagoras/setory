<body>
<div class="bg-primary font-sans">

@include('components.navbar')

    @foreach($buildings as $building)
        @if($loop->index % 2 != 0)
            <div  class="z-0 relative flex flex-wrap md:flex-nowrap h-[300px] bg-cover bg-center" style="background-image: url({{$building->image->link}}); height: 300px;">
                <div class="absolute inset-0 bg-primary bg-opacity-70"></div>
                <div class="flex flex-wrap w-full">
                    <!-- Konten Kiri -->
                    <div class="relative z-10 text-white p-6 md:w-1/2 w-full flex flex-col">
                        <p class="text-xl md:text-4xl font-bold md:text-left">{{$building->name}}</p>
                        <p class="text-sm md:text-2xl font-bold md:text-left">{{$building->location}}</p>
                        <p class="mt-4 text-sm md:text-lg sm:text-left break-words">
                            {{$building->description}}
                        </p>
                        <a href="/subject/{{$building->id}}" class="text-[#f3b664] font-semibold hover:opacity-90 transition-colors text-left">Baca selengkapnya</a>
                        <div class="mt-6 flex justify-start md:gap-4 gap-2">
                            <!-- Tombol di bawah teks -->
                            <button
                                onclick="window.location.href='/start-quiz/{{$building->id}}'"
                            class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-2 md:px-4 py-1 md:py-2 text-sm md:text-xl rounded-xl">Mulai Quiz</button>
                            <!-- Tombol di bawah gambar -->
                            <button class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-2 md:px-4 py-1 md:py-2 text-sm md:text-xl rounded-xl">Tonton Video</button>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="z-0 relative flex flex-wrap md:flex-nowrap h-[300px] bg-cover bg-center" style="background-image: url({{$building->image->link}}); height: 300px;">
                <!-- Overlay untuk background -->
                <div class="absolute inset-0 bg-primary bg-opacity-70"></div>
                <div class="flex flex-wrap w-full justify-end">

                    <!-- Konten di kanan -->
                    <div class="relative z-10 text-white p-6 md:w-1/2 w-full flex flex-col">
                        <h3 class="text-xl md:text-4xl font-bold md:text-right">{{$building->name}}</h3>
                        <h2 class="text-sm md:text-2xl font-bold md:text-right">{{$building->location}}</h2>
                        <p class="mt-4 text-sm md:text-lg sm:text-right break-words">
                            {{$building->description}}
                        </p>
                        <a href="/subject/{{$building->id}}" class="text-[#f3b664] font-semibold hover:opacity-90 transition-colors md:text-right ">Baca selengkapnya</a>
                        <!-- Tombol di bawah teks -->
                        <div class="mt-6 flex flex-wrap justify-start md:justify-end gap-2 ">
                            <button
                                onclick="window.location.href='/start-quiz/{{$building->id}}'"
                                class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-2 md:px-4 py-1 md:py-2 text-sm md:text-xl rounded-xl">Mulai Quiz</button>
                            <!-- Tombol di bawah gambar -->
                            <button class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-2 md:px-4 py-1 md:py-2 text-sm md:text-xl rounded-xl">Tonton Video</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
 <!-- Lawang Sewu -->


<!-- Hotel Yamato-->



    @include('components.footer')

</div>
</body>
