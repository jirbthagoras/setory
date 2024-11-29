<div>
    @if(!$questionCompleted)
        <div>
            <h2>Question {{ $currentQuestionIndex + 1 }}</h2>
            <p>{{ $currentQuestion->description }}</p>

            <div>
                @foreach ($currentQuestion->options as $option)
                    <h1
                        wire:click="selectOption({{ $option->id }})"
                        class="{{ $selectedOption == $option->id ? 'text-red-500' : 'text-black' }}">
                        {{ $option->description }}
                    </h1>
                @endforeach
            </div>
            <button wire:click="nextQuestion">
                Rakberak
            </button>
        </div>
    @else

    @endif
</div>
