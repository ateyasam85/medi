document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('advertSlider');
    if (!slider) return;
  
    let index = 0;
    const totalSlides = slider.children.length;
  
    function autoSlide() {
      index = (index + 1) % totalSlides;
      slider.style.transform = `translateX(-${index * 100}%)`;
    }
  
    setInterval(autoSlide, 3000);
  });
  