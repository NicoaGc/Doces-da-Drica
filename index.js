  const carouselElement = document.getElementById('heroCarousel');

let startX = 0;
let endX = 0;

carouselElement.addEventListener('touchstart', (e) => {
  startX = e.touches[0].clientX;
});

carouselElement.addEventListener('touchmove', (e) => {
  endX = e.touches[0].clientX;
});

carouselElement.addEventListener('touchend', () => {
  let diffX = endX - startX;

  if (Math.abs(diffX) > 50) { // mínimo de 50px para considerar swipe
    if (diffX > 0) {
      // Swipe para direita: volta slide
      bootstrap.Carousel.getInstance(carouselElement).prev();
    } else {
      // Swipe para esquerda: avança slide
      bootstrap.Carousel.getInstance(carouselElement).next();
    }
  }
});

function scrollCarousel(direction) {
  const carousel = document.getElementById('carousel');
  const wrapper = document.querySelector('.carousel-doces-wrapper');
  const card = document.querySelector('.doce-card');
  
  if (!carousel || !wrapper || !card) return;
  
  // Verifica se é dispositivo móvel
  const isMobile = window.innerWidth <= 768;
  
  let scrollDistance;
  
  if (isMobile) {
    // Mobile: move card por card
    scrollDistance = card.offsetWidth + 15; // largura do card + gap
  } else {
    // Desktop: move uma tela inteira
    scrollDistance = wrapper.offsetWidth;
  }
  
  carousel.scrollBy({
    left: scrollDistance * direction,
    behavior: 'smooth'
  });
}