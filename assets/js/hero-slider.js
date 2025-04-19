document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll('#hero-slider .slide');
    let currentSlide = 0;
  
    setInterval(() => {
      slides[currentSlide].classList.remove('opacity-100');
      slides[currentSlide].classList.add('opacity-0');
  
      currentSlide = (currentSlide + 1) % slides.length;
  
      slides[currentSlide].classList.remove('opacity-0');
      slides[currentSlide].classList.add('opacity-100');
    }, 5000); // Change slide every 5 seconds
  });
  