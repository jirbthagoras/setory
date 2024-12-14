<nav class="z-10 w-full h-20 mx-auto relative flex items-center justify-between px-8">
    <!-- Logo -->
    <div class="text-white text-lg font-bold font-['Plus Jakarta Sans'] leading-[27px]">
        <img src="/logo.png" alt="Logo" class="w-[3rem] h-[3rem]">
    </div>

    <!-- Hamburger Menu -->
    <div class="md:hidden text-white z-50 text-2xl cursor-pointer" id="hamburger">
        &#9776;
    </div>

    <!-- Navbar Links -->
    <div
        class="hidden md:flex items-center absolute md:static top-20 left-0 w-full bg-transparent md:bg-transparent md:w-auto flex-col md:flex-row space-y-2 md:space-y-0 transition-all duration-300 ease-in-out"
        id="nav-links"
    >
        <a
            href="/"
            class="text-white hover:text-secondary rounded-md duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2"
        >
            Home
        </a>
        <a
            href="/tour"
            class="text-white hover:text-secondary rounded-md duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2"
        >
            Tour
        </a>
        <a
            href="/culinary"
            class="text-white hover:text-secondary rounded-md duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2"
        >
            Kuliner
        </a>
        <a
            href="/community"
            class="text-white hover:text-secondary rounded-md duration-200 ease-in-out text-sm font-semibold font-sans leading-[21px] px-4 py-2"
        >
            Komunitas
        </a>

        <!-- Login Button -->
        @if(!auth()->check())
            <a
                href="{{route('login-page')}}"
                class="md:ml-8 px-4 py-2 bg-[#ffd3ac]/10 rounded-[10px] text-white text-xs font-semibold font-['Plus Jakarta Sans'] leading-[18px] hover:bg-[#ffd3ac]/20"
            >
                Login/Sign Up
            </a>
        @else
            <a
                href="{{route('logout')}}"
                class="md:ml-8 px-4 py-2 bg-red-600 rounded-[10px] text-white text-xs font-semibold font-['Plus Jakarta Sans'] leading-[18px] hover:bg-[#ffd3ac]/20"
            >
                Logout
            </a>
        @endif
    </div>

    <!-- Border -->
    <div
        class="absolute left-8 right-8 bottom-0 border-t-2 border-white mt-2"
    ></div>
</nav>

<script>
    window.onscroll = function() {
        const button = document.getElementById('floating-nav-btn');
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            button.style.display = 'block'; // Tampilkan tombol saat di-scroll
        } else {
            button.style.display = 'none'; // Sembunyikan tombol saat di atas
            document.getElementById('section-icons').style.display = 'none'; // Sembunyikan ikon
        }
    };

    function toggleSectionIcons() {
        const icons = document.getElementById('section-icons');
        icons.style.display = icons.style.display === 'flex' ? 'none' : 'flex'; // Toggle tampilan ikon
    }

    function navigateToSection(section) {
        // Logika untuk navigasi ke section yang sesuai
        alert('Navigating to ' + section); // Ganti dengan logika navigasi yang sesuai
    }
    const hamburger = document.getElementById("hamburger");
    const navLinks = document.getElementById("nav-links");

    hamburger.addEventListener("click", () => {
        if (navLinks.classList.contains("hidden")) {
            navLinks.classList.remove("hidden");
            navLinks.style.maxHeight = navLinks.scrollHeight + "px";
        } else {
            navLinks.style.maxHeight = "0px";
            setTimeout(() => {
                navLinks.classList.add("hidden");
            }, 300);
        }
    });
</script>
<style>
    /* Add responsive styles */
    @media (max-width: 768px) {
        #nav-links {
            display: flex;
            flex-direction: column;
            background: #312414;
            /*padding: 10px;*/
            border-radius: 8px;
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.3s ease-in-out;
        }
        #nav-links a {
            width: 100%;
            text-align: left;
            padding: 10px 20px;
            transition: color 0.3s ease-in-out, transform 0.2s;
        }
        #nav-links a:hover {
            color: #ffd3ac;
            transform: translateX(5px);
            background-color: rgba(61, 35, 35, 0.7);
            border-radius: 5px;
        }
    }
</style>

