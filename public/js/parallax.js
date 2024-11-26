document.addEventListener("scroll", function() {
    const parallaxItems = document.querySelectorAll(".parallax-item");

    parallaxItems.forEach((item) => {
        const speed = parseFloat(item.getAttribute("data-speed"));
        const yPos = window.scrollY * speed;

        // Ambil nilai translateX awal dari style elemen
        const initialTransform = item.style.transform.match(/translateX\(([^)]+)\)/);
        const translateX = initialTransform ? initialTransform[0] : "translateX(0)";

        // Set transform dengan translateX tetap dan update translateY
        item.style.transform = `${translateX} translateY(${yPos}px)`;
    });
});

function toggleCard(element) {
    // Hapus kelas aktif dan atur ulang transformasi pada semua card
    document.querySelectorAll('.group').forEach(card => {
        card.classList.remove('active');
        card.style.transform = 'scale(1)';
    });

    // Toggle kelas aktif dan transformasi pada card yang diklik
    if (!element.classList.contains('active')) {
        element.classList.add('active');
        element.style.transform = 'scale(1.2)'; // Perbesar sedikit
    }
}


document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.scroll-content');
    const originalContent = scrollContainer.innerHTML;
    // Duplicate content for seamless loop
    scrollContainer.innerHTML = originalContent + originalContent;
});
