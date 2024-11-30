<div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
    @isset($userRating)
        <div class="p-4 border-b border-gray-200">
            <p class="font-semibold text-gray-700">{{$user->name}} (ulasanmu)</p>
            <div class="flex gap-1 text-yellow-500">
                @for($i = 0; $i < $userRating->rate ;$i++)
                    <span>&#9733;</span>
                @endfor
            </div>
            <p class="text-gray-600 mt-2">{{$userRating->comment}}</p>

            <!-- Action Buttons -->
            <div class="flex gap-4 mt-4">
                <button
                    wire:click="deleteRating"
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300"
                >
                    Delete
                </button>
            </div>
        </div>

    @else
        @include('components.form.rating-form')
</div>
    @endif



<!-- Scrollable Review Section -->
<div class="mt-8">
    <h2 class="text-xl text-secondary font-semibold mb-4">Daftar Ulasan</h2>
    <div
        id="reviewList"
        class="max-h-[300px] overflow-y-auto bg-white p-4 rounded-lg shadow-md space-y-4"
    >
        @foreach($ratings as $rating)

            <div class="p-4 border-b border-gray-200">
                <p class="font-semibold text-gray-700">{{$rating->user->name}}</p>
                <div class="flex gap-1 text-yellow-500">

                    @for($i = 0; $i < $rating->rate ;$i++)
                        <span>&#9733;</span>
                    @endfor
                </div>
                <p class="text-gray-600 mt-2">{{$rating->comment}}</p>
            </div>

        @endforeach
        <!-- Example Review -->

        <!-- Add more reviews dynamically here -->
    </div>
</div>
</div>
