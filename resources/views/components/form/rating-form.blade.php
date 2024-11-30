<form wire:submit.prevent="createRating" id="reviewForm" class="space-y-4">
    <!-- Nama -->

    <!-- Ulasan -->
    <div>
        <label for="review" class="block font-semibold text-gray-700">Ulasan:</label>
        <textarea
            wire:model="comment"
            id="review"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
            placeholder="Tulis ulasan Anda"
            rows="4"
            required
        ></textarea>
    </div>

    <!-- Rating -->
    <div>
        <label for="rating" class="block font-semibold text-gray-700">Rating:</label>
        <select
            wire:model="rating"
            id="rating"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200 mb-3"
            required
        >
            <option selected value={{1}}>1 - Sangat Buruk</option>
            <option value={{2}}>2 - Buruk</option>
            <option value={{3}}>3 - Cukup</option>
            <option value={{4}}>4 - Baik</option>
            <option value={{5}}>5 - Sangat Baik</option>
        </select>


        <!-- Submit Button -->
        <button
            type="submit"
            class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-opacity-85 transition duration-300"
        >
            Tambahkan Ulasan
        </button>
</form>
