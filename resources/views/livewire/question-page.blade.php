<div>
    <!-- Updated Quiz Template with Tailwind UI -->
    <div class="flex flex-col items-center justify-center min-h-screen bg-primary text-white">
        <div class="container mx-auto text-center">
            <!-- Question Container -->
            <div class="w-[775px] h-[234px] bg-[#6c512e] flex items-center justify-center shadow-md shadow-secondary rounded-xl">
                <h2 class="text-sm md:text-base lg:text-2xl mb-6 leading-relaxed">
                    {{ $currentQuestion->description }}
                </h2>
            </div>

            <!-- Question Image (if exists) -->
            @if ($currentQuestion->image)
                <img src="{{ $currentQuestion->image->link }}" alt="Question Image" class="w-full max-w-md my-4 rounded-lg shadow-lg">
            @endif

            <!-- Options Section -->
            <div class="grid grid-cols-2 gap-6 w-[775px] mt-8 font-sans">
                @foreach ($currentQuestion->options as $option)
                    <button
                        wire:click="$set('selectedOption', {{ $option->id }})"
                        class="text-white text-2xl py-4 px-8 rounded-lg {{ $selectedOption === $option->id ? 'bg-[#6C512E]' : 'hover:bg-[#6C512E] hover:duration-300 hover:ease-in-out' }} hover:text-secondary focus:ring-2 focus:ring-[#9b836e] font-semibold"
                        {{ $checked ? 'disabled' : '' }}>
                        {{ $option->description }}
                    </button>
                @endforeach
            </div>

            <!-- Wrong Message -->
            @if ($wrongMessage)
                <p class="text-red-500 mt-4">{{ $wrongMessage }}</p>
            @endif

            @if($correct)
                <p class="text-green-500 mt-4">Jawabanmu Benar!</p>
            @endif

            <!-- Actions Section -->
            <div class="flex gap-4 mt-8">
                <button
                    wire:click="checkAnswer"
                    class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600 {{ (!$selectedOption || $checked) ? 'opacity-50 cursor-not-allowed' : '' }}"
                    {{ !$selectedOption || $checked ? 'disabled' : '' }}>
                    Check Answer
                </button>

                <button
                    wire:click="nextQuestion"
                    class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600 {{ !$checked ? 'opacity-50 cursor-not-allowed' : '' }}"
                    {{ !$checked ? 'disabled' : '' }}>
                    {{ $currentQuestionIndex === $questions->count() - 1 ? 'Finish Quiz' : 'Next Question' }}
                </button>
            </div>

            <!-- Score Display -->
            <div class="mt-6 text-lg font-bold">
                Current Score: {{ $score }}
            </div>
        </div>
    </div>
</div>
