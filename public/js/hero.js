let currentSlide = 0;

const slides = document.querySelectorAll('.carousel-1, .carousel-2, .carousel-3');
const wrapper = document.querySelector('.carousel-wrapper');

// Fungsi untuk menampilkan slide
function showSlide(index) {
    slides.forEach((slide, idx) => {
        slide.style.transition = 'transform 1s ease';
        slide.style.transform = `translateX(${100 * (idx - index)}%)`;
    });
}

// Fungsi untuk menggerakkan carousel secara otomatis
function autoMoveCarousel() {
    currentSlide++;
    if (currentSlide >= slides.length) {
        currentSlide = 0;
    }
    showSlide(currentSlide);
}

// Fungsi untuk tombol panah
function moveCarousel(direction) {
    if (direction === 'next') {
        currentSlide++;
        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }
    } else if (direction === 'prev') {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = slides.length - 1;
        }
    }
    showSlide(currentSlide);
}

// Set interval untuk carousel otomatis setiap 3 detik
setInterval(autoMoveCarousel, 3000);

showSlide(currentSlide);
