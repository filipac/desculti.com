
function cycleBackgrounds(el) {
    const imgs = JSON.parse(el.dataset.images || '[]');
    if (!imgs.length) return;
  
    const interval = Number(el.dataset.interval || 6000);
    let i = 0;
  
    // set first image immediately
    el.style.backgroundImage = `url("${imgs[i]}")`;
  
    setInterval(() => {
      i = (i + 1) % imgs.length;
      el.style.transition = 'background-image 0.8s ease'; // browsers crossfade cached images
      el.style.backgroundImage = `url("${imgs[i]}")`;
    }, interval);
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-hero-cycle]').forEach(cycleBackgrounds);
  });
  