document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;
    let interval;

    function showNextSlide() {
        slides[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % slides.length;
        slides[currentIndex].classList.add('active');
    }

    function startSlider() {
        interval = setInterval(showNextSlide, 7000);
    }

    function stopSlider() {
        clearInterval(interval);
    }

    slides.forEach(slide => {
        slide.addEventListener('mouseenter', stopSlider);
        slide.addEventListener('mouseleave', startSlider);
    });

    startSlider(); // Start the slider when the DOM is fully loaded
});
