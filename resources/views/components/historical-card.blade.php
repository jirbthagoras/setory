<!-- Card Museum Sejarah -->
<div class="group relative h-[400px] w-[100px] cursor-pointer transition-all duration-500 peer"
     onclick="toggleCard(this)">
    <img src="{{$subject->image->link}}"
         class="h-full w-full object-cover rounded-xl"
         alt="{{$subject->name}}">
    <div class="bg-black/50 absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-xl opacity-0 group-[.active]:opacity-100 transition-opacity duration-500">
        <h3 class="text-white text-xl font-semibold mb-2">{{$subject->name}}</h3>
        <p class="text-white text-sm">{{$subject->description}}</p>
        <a href="{{route('subject', ["id" => $subject->id])}}" class="px-2 py-1 bg-primary text-secondary text-[15px] glow rounded-lg hover:opacity-55">Cari Tahu</a>
    </div>
</div>

