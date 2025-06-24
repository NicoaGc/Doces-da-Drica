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

function scrollCarousel(direction, carouselId, wrapperClass, cardClass) {
  const carousel = document.getElementById(carouselId);
  const wrapper = document.querySelector(`.${wrapperClass}`);
  const card = document.querySelector(`.${cardClass}`);
  
  if (!carousel || !wrapper || !card) return;

  const isMobile = window.innerWidth <= 768;

  let scrollDistance = isMobile
    ? card.offsetWidth + 15
    : wrapper.offsetWidth;

  carousel.scrollBy({
    left: scrollDistance * direction,
    behavior: 'smooth'
  });
}
