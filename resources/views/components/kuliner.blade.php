<div class="group relative h-[422px] w-[242px] transition-all duration-300 hover:w-[400px]">
    <img src="{{$culinary->image->link}}" alt="Kuliner 5" class="h-full w-full object-cover rounded-lg">
    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <h3 class="text-white glow text-2xl font-bold mb-2">{{$culinary->name}}</h3>
        <p class="text-white text-sm pb-2">{{$culinary->description}}</p>
        <a href="" class="px-2 py-2 bg-primary mt-4 text-secondary glow rounded-lg hover:opacity-55">Cari Tahu</a>
    </div>
</div>
