document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("opacity-100");
        }
      });
    }, {
      threshold: 0.1
    });
  
    const animatedSections = document.querySelectorAll(".animate-fade-in-up");
    animatedSections.forEach(section => observer.observe(section));
  });
  