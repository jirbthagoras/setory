<body>
<div class="bg-primary font-sans">

@include('components.navbar')

    @foreach($buildings as $building)
        @if($loop->index % 2 != 0)
            <div wire:click="goTo({{$building->id}})" class="relative flex flex-wrap md:flex-nowrap h-[300px] bg-cover bg-center" style="background-image: url({{$building->image->link}}); height: 300px;">
                <div class="absolute inset-0 bg-primary bg-opacity-70"></div>
                <div class="flex flex-wrap w-full">
                    <!-- Konten Kiri -->
                    <div class="relative z-10 text-white p-6 md:w-1/2 w-full flex flex-col">
                        <h3 class="text-4xl font-bold">{{$building->name}}</h3>
                        <h2 class="text-lg font-bold">{{$building->location}}</h2>
                        <p class="mt-4 text-sm">
                            {{$building->description}}
                        </p>
                        <div class="mt-6 flex justify-start md:gap-4 gap-2">
                            <!-- Tombol di bawah teks -->
                            <button class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-4 py-2 rounded-xl">Mulai Quiz</button>
                            <!-- Tombol di bawah gambar -->
                            <button class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-4 py-2 rounded-xl">Tonton Video</button>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div wire:click="goTo({{$building->id}})" class="relative flex flex-wrap md:flex-nowrap h-[300px] bg-cover bg-center" style="background-image: url({{$building->image->link}}); height: 300px;">
                <!-- Overlay untuk background -->
                <div class="absolute inset-0 bg-primary bg-opacity-70"></div>
                <div class="flex flex-wrap w-full justify-end">

                    <!-- Konten di kanan -->
                    <div class="relative z-10 text-white p-6 md:w-1/2 w-full flex flex-col">
                        <h3 class="text-4xl font-bold md:text-right">{{$building->name}}</h3>
                        <h2 class="text-lg font-bold md:text-right">{{$building->location}}</h2>
                        <p class="mt-4 text-sm sm:text-right">
                            {{$building->description}}
                        </p>
                        <!-- Tombol di bawah teks -->
                        <div class="mt-6 flex flex-wrap justify-start md:justify-end gap-2 ">
                            <button class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-4 py-2 rounded-xl">Mulai Quiz</button>
                            <!-- Tombol "Tonton Video" muncul di HP dan sejajar -->
                            <button class="bg-[#8B5E3C] hover:bg-[#A67B5B] text-white px-4 py-2 rounded-xl">Tonton Video</button>
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
