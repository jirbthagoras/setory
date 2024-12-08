<div class="quiz-container">
    <h2 class="text-2xl font-bold">{{ $currentQuestion->name }}</h2>

    @if ($currentQuestion->image)
        <img src="{{ $currentQuestion->image->link }}" alt="Question Image" class="w-full max-w-md mb-4">
    @endif

    <p class="text-lg">{{ $currentQuestion->description }}</p>

    <div class="options mt-4">
        @foreach ($currentQuestion->options as $option)
            <label class="block">
                <input type="radio" name="option" value="{{ $option->id }}"
                       wire:model="selectedOption" class="mr-2">
                {{ $option->description }}
            </label>
        @endforeach
    </div>


    @if(session('wrongMessage'))
        <p class="text-red-500 mt-2">{{ session('wrongMessage') }}</p>
    @endif

    <div class="actions mt-4">
        <button
            wire:click="checkAnswer"
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
            {{ !$selectedOption ?? 'disabled' }}
        >
            Next
        </button>
    </div>

    <h1>{{$score}}</h1>
</div>
