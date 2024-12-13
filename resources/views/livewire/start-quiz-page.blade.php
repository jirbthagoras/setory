<body class="bg-primary font-sans">
<!-- Detail Page -->
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white bg-opacity-80 shadow-2xl rounded-lg p-6 max-w-md w-full">
        <h1 class="text-3xl text-primary font-bold mb-4 text-center">Detail Quiz</h1>
        <p class="text-xl"><span class="font-semibold">{{$subject->name}}</span></p>
        <p class="text-xl mt-2">Sudah Mengerjakan:
        @if(isset($score))

            <span class="font-semibold text-green-600">Sudah</span>
        <p class="text-xl mt-2">Skor: <span class="font-semibold">{{$score->score}}</span></p>
        @else
            <span class="font-semibold text-red-600">Belum<span>
        @endif
        <div class="mt-6 flex justify-between">
            <button onclick="history.back()"
                    class="bg-primary hover:bg-red-400 hover:text-primary text-white font-semibold py-2 px-4 rounded transition-transform transform hover:scale-105">
                Kembali
            </button>
            <button wire:click="startQuiz"
                    class="bg-primary hover:bg-green-400 hover:text-primary text-white font-semibold py-2 px-4 rounded transition-transform transform hover:scale-105">
                Mulai Quiz
            </button>
        </div>
    </div>
</div>
</body>
</html>
