document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('mobile-sidebar');
    const closeBtn = document.getElementById('close-menu');
    const backdrop = document.getElementById('sidebar-backdrop');
  
    if (toggleBtn) {
      toggleBtn.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
        backdrop?.classList.remove('hidden');
      });
    }
  
    if (closeBtn) {
      closeBtn.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        backdrop?.classList.add('hidden');
      });
    }
  
    if (backdrop) {
      backdrop.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        backdrop?.classList.add('hidden');
      });
    }
  });
  