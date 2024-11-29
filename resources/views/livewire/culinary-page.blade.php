<body class="bg-gradient-to-r from-[#312414] to-[#f3b664]">

<div>

@include('components.navbar')

    @foreach($culinaries as $culinary)

            <!-- Lumpia Kanan-->

            <div
                class="container mx-auto flex flex-wrap md:flex-nowrap flex-row-reverse items-center mt-20"
            >

                <div class="w-full md:w-1/2 flex justify-end items-center ">
                    <img
                        src="{{$culinary->image->link}}"
                        alt="{{$culinary->name}}"
                        class="w-[377px] h-[392px] rounded-full"
                    />
                </div>
                <div class="w-full md:w-1/2 text-left">
                    <h1
                        class="text-start text-white text-[40px] font-bold font-sans leading-[60px]"
                    >
                        {{$culinary->name}}<br /> {{$culinary->location}}
                    </h1>
                    <div class="w-[644px] text-">
                        <h1 class="text-white text-2xl font-bold font-['Plus Jakarta Sans'] leading-9">
                            {{$culinary->description}}
                        </h1>
                        <a class="text-[#94410c] text-2xl font-bold font-['Plus Jakarta Sans'] leading-9">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Garis di bawah -->
            <div
                class="absolute mt-8 left-0 right-0 mx-auto w-full border-t border-white"
            ></div>

    @endforeach

<!-- Bika Ambon Kiri -->


    @include('components.footer')
</div>
</body>
