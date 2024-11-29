@if($event->id & 2 != 0)
    <div class="flex justify-center items-center gap-6 mx-auto container mt-8">
        <img src="{{$event->image->link}}" alt="Main Event" class="h-[319px] rounded-3xl shadow">
        <div class="h-[319px] w-96 rounded-3xl">
            <h1 class="text-4xl text-start font-garamond font-bold glow text-white">{{$event->name}}</h1>
            <h2 class="text-start font-bold font-sans glow text-white mt-2">Lokasi: {{$event->location}} </h2>
            <h2 class="text-start font-bold font-sans glow text-white mt-2">From: {{$event->from}} </h2>
            <h2 class="text-start font-bold font-sans glow text-white mt-2">Until: {{$event->until}} </h2>
            <p class="text-xl mt-2 text-white text-start font-garamond">
                {{$event->description}}
            </p>
        </div>
    </div>
@else
    <div class="flex justify-center items-center gap-6 mx-auto container mt-8">
        <div class="h-[319px] w-96 rounded-3xl">
            <h1 class="text-4xl text-start font-garamond font-bold glow text-white">{{$event->name}}</h1>
            <h2 class="text-start font-bold font-sans glow text-white mt-2">Lokasi: {{$event->location}} </h2>
            <h2 class="text-start font-bold font-sans glow text-white mt-2">From: {{$event->from}} </h2>
            <h2 class="text-start font-bold font-sans glow text-white mt-2">Until: {{$event->until}} </h2>
            <p class="text-xl mt-2 text-white text-start font-garamond">
                {{$event->description}}
            </p>
        </div>
        <img src="{{$event->image->link}}" alt="Main Event" class="h-[319px] rounded-3xl shadow">
    </div>
@endif
