<body class="bg-primary text-white min-h-screen font-sans">
<div>

    @include('components.navbar')

<div class="max-w-3xl mx-auto p-6 bg-white mt-10 rounded-[20px]">
    <!-- Header -->
    <div class="text-center bg-[#1E1007CC] py-4 rounded-lg shadow-md">
        <h1 class="text-lg font-semibold">Komunitas Anda</h1>
    </div>

    @livewire("ChatComponent")
</div>

    <script src="/js/komunitas.js"></script>

</div>
</body>
