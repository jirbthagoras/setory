// ... existing code ...
function toggleAnswer(button) {
    // Ambil div jawaban di bawah tombol
    const answerDiv = button.nextElementSibling;
    // Toggle kelas 'hidden' untuk menampilkan/menyembunyikan jawaban dengan efek transisi
    if (answerDiv.classList.contains('hidden')) {
        answerDiv.classList.remove('hidden');
        answerDiv.style.maxHeight = answerDiv.scrollHeight + "px";
        answerDiv.style.transition = "max-height 0.3s ease-in-out";
    } else {
        answerDiv.style.maxHeight = null;
        answerDiv.style.transition = "max-height 0.3s ease-in-out";
        setTimeout(() => {
            answerDiv.classList.add('hidden');
        }, 200); // Durasi transisi 300ms
    }
} // Perbaikan: menambahkan penutupan fungsi yang benar
// Mengambil referensi elemen
const reviewForm = document.getElementById('reviewForm');
const reviewList = document.getElementById('reviewList');

// Event listener untuk form submit
reviewForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Mencegah reload halaman

    // Mengambil nilai dari input
    const name = document.getElementById('name').value;
    const review = document.getElementById('review').value;
    const rating = document.getElementById('rating').value;

    // Membuat elemen ulasan baru
    const reviewItem = document.createElement('div');
    reviewItem.classList.add('bg-white', 'p-4', 'rounded-lg', 'shadow-md', 'border');
    reviewItem.innerHTML = `
         <h3 class="font-semibold text-lg">${name}</h3>
         <p class="text-gray-600">${review}</p>
         <p class="mt-2 text-yellow-500 font-semibold">Rating: ${'★'.repeat(rating)}</p>
     `;

    // Menambahkan ulasan ke daftar
    reviewList.appendChild(reviewItem);

    // Reset form
    reviewForm.reset();
});
