<nav class="w-full h-20 mx-auto relative flex items-center justify-between px-8">
    <!-- Logo -->
    <div class="text-white text-lg font-bold font-['Plus Jakarta Sans'] leading-[27px]">
        LOGO
    </div>

    <!-- Navbar Links -->
    <div class="flex items-center gap-8">
        <a href="/" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Home</a>
        <a href="/tour" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Tour</a>
        <a href="/culinary" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Kuliner</a>
        <a href="#event" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Event</a>
        <a href="#" class="text-white text-sm font-semibold font-sans leading-[21px] px-4 py-2">Komunitas</a>

        <!-- Login Button -->
        @if(!auth()->check())
            <a href="{{route('login-page')}}" class="ml-8 px-4 py-2 bg-[#ffd3ac]/10 rounded-[10px] text-white text-xs font-semibold font-['Plus Jakarta Sans'] leading-[18px]">
                Login/Sign Up
            </a>
        @else
            <a href="{{route('logout')}}" class="ml-8 px-4 py-2 bg-red-600 rounded-[10px] text-white text-xs font-semibold font-['Plus Jakarta Sans'] leading-[18px]">
                Logout
            </a>
        @endif
    </div>

    <!-- Border -->
    <div class="absolute left-8 right-8 bottom-0 border-t-2 border-white mt-2"></div>
</nav>
