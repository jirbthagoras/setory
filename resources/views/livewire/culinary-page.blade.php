<body class="bg-primary">
<div>
@include('components.navbar')

<!-- Hero Section -->
<div class="py-20 mb-12 text-center">
    <h1 class="text-5xl font-extrabold text-[#f3b664] mb-4">Makanan Khas Nusantara</h1>
    <p class="text-lg text-gray-200">Jelajahi kekayaan rasa dari berbagai daerah di Indonesia</p>
</div>
<!-- Grid Cards -->
<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($culinaries as $culinary)

            <div class="card bg-[#312414] border border-[#f3b664] rounded-xl shadow-xl overflow-hidden transform transition-all">
                <div class="flex justify-center items-center">
                    <img src="{{$culinary->image->link}}" alt="{{$culinary->name}}" class="w-80 h-56 object-cover rounded-[20px] mt-[1rem]" />
                </div>
                <div class="p-6">
                    <h2 class="text-3xl font-bold text-[#f3b664] mb-3">{{$culinary->name}}</h2>
                    <p class="text-gray-300 text-sm mb-4">
                            {{$culinary->description}}
                    </p>
                    <a href="/subject/{{$culinary->id}}" class="text-[#f3b664] font-semibold hover:opacity-90 transition-colors">Baca selengkapnya</a>
                </div>
            </div>

        @endforeach
    </div>
</div>
</div>
</body>
