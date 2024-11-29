document.addEventListener("scroll", function () {
    const parallaxItems = document.querySelectorAll(".parallax-item");

    parallaxItems.forEach((item) => {
        const speed = parseFloat(item.getAttribute("data-speed"));
        const yPos = window.scrollY * speed;

        // Ambil nilai translateX awal dari style elemen
        const initialTransform = item.style.transform.match(
            /translateX\(([^)]+)\)/
        );
        const translateX = initialTransform ? initialTransform[0] : "translateX(0)";

        // Set transform dengan translateX tetap dan update translateY
        item.style.transform = `${translateX} translateY(${yPos}px)`;
    });
});

function toggleCard(element) {
    // Hapus kelas aktif dan atur ulang transformasi pada semua card
    document.querySelectorAll(".group").forEach((card) => {
        card.classList.remove("active");
        card.style.transform = "scale(1)";
    });

    // Toggle kelas aktif dan transformasi pada card yang diklik
    if (!element.classList.contains("active")) {
        element.classList.add("active");
        element.style.transform = "scale(1.2)"; // Perbesar sedikit
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const scrollContainer = document.querySelector(".scroll-content");
    const originalContent = scrollContainer.innerHTML;
    // Duplicate content for seamless loop
    scrollContainer.innerHTML = originalContent + originalContent;
});

// JavaScript untuk animasi geser
const slider = document.getElementById("slider");
const registerButton = document.getElementById("register-button");
const loginButton = document.getElementById("login-button");

registerButton.addEventListener("click", () => {
    slider.classList.add("shift-left");
});

loginButton.addEventListener("click", () => {
    slider.classList.remove("shift-left");
});

function togglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.getElementById("toggle-icon");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.textContent = "🙈"; // Ikon untuk sembunyikan
    } else {
        passwordInput.type = "password";
        toggleIcon.textContent = "👁️"; // Ikon untuk tampilkan
    }
}
// Toggle section icons
floatingNavBtn.addEventListener('click', () => {
    isIconsVisible = !isIconsVisible;

    if (isIconsVisible) {
        sectionIcons.style.display = 'flex';
        floatingNavBtn.classList.add('active');
    } else {
        sectionIcons.style.display = 'none';
        floatingNavBtn.classList.remove('active');
    }
});

// Scroll to section when icon is clicked
const sectionIconElements = document.querySelectorAll('.section-icon');
sectionIconElements.forEach(icon => {
    icon.addEventListener('click', () => {
        const sectionId = icon.getAttribute('data-section');
        let targetElement;

        switch(sectionId) {
            case 'home':
                targetElement = document.querySelector('body');
                break;
            case 'tour':
                targetElement = document.querySelector('[class*="Tour Guide Section"]');
                break;
            case 'kuliner':
                targetElement = document.querySelector('[class*="Carousel Section"]');
                break;
            case 'event':
                targetElement = document.querySelector('[class*="Konten Event Section"]');
                break;
            case 'community':
                targetElement = document.querySelector('[class*="Commnity Page"]');
                break;
        }

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }

        // Close icons after selection
        sectionIcons.style.display = 'none';
        isIconsVisible = false;
        floatingNavBtn.classList.remove('active');
    });
});
;
