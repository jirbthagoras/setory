<div>
    <div class="flex flex-col items-center justify-center min-h-screen bg-primary text-white">
        <div class="container mx-auto text-center justify-center items-center flex-col">

            @if ($currentQuestion->image)
                <img src="{{ $currentQuestion->image->link }}" alt="Question Image" class="mt-16 w-full max-w-md my-4 rounded-lg shadow-lg mx-auto">
            @endif


            <!-- Question Container -->
                <div class="">
                    @if ($wrongMessage)
                        <div class="p-4 mb-4 w-fit md:w-[775px] text-white bg-red-600 rounded mt-4 shadow-inherit mx-auto">
                            <p class="font-bold text-lg md:text-xl">
                                {{ $wrongMessage }}
                            </p>
                        </div>
                    @endif

                        @if($correct)
                            <div class="p-4 mb-4 w-fit md:w-[775px] text-white bg-green-600 rounded mt-4 shadow-inherit mx-auto">
                                <p class="font-bold text-lg md:text-xl">
                                    Jawabanmu Benar!
                                </p>
                            </div>
                        @endif

                    <div class="w-full md:w-[775px] h-[234px] bg-[#6c512e] flex items-center justify-center shadow-md shadow-secondary rounded-xl mx-auto">
                        <p class="text-xl md:text-2xl mb-6 leading-relaxed">
                            {{ $currentQuestion->description }}
                        </p>
                    </div>



                    <div class="grid grid-row-4 md:grid-cols-2 gap-2 md:gap-6 w-fit mt-8 font-sans mx-auto">
                        @foreach ($currentQuestion->options as $option)
                            <button
                                wire:click="$set('selectedOption', {{ $option->id }})"
                                class="text-white md:text-2xl text-xl py-4 px-8 rounded-lg {{ $selectedOption === $option->id ? 'bg-[#6C512E]' : 'hover:bg-[#6C512E] hover:duration-300 hover:ease-in-out' }} hover:text-secondary focus:ring-2 focus:ring-[#9b836e] font-semibold"
                                {{ $checked ? 'disabled' : '' }}>
                                {{ $option->description }}
                            </button>
                        @endforeach
                    </div>
                </div>





            <!-- Actions Section -->
            <div class="flex gap-4 mt-8 mx-auto justify-center items-center mb-16">
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
        </div>
    </div>
</div>
