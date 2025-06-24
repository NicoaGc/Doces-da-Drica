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
          //JS docesfinos carrosel

// Js validação produtos

    const form = document.getElementById('formContato');
    const msg = document.getElementById('msg');
    const telefone = document.getElementById('telefone');

    const campos = ['nome', 'email', 'telefone', 'produto', 'mensagem', 'cidade', 'origem'];

    // Salvar e recuperar do localStorage
    window.addEventListener('load', () => {
      campos.forEach(campo => {
        const input = form[campo];
        if (input) input.value = localStorage.getItem('form-' + campo) || '';
      });
    });

    campos.forEach(campo => {
      const input = form[campo];
      if (input) {
        input.addEventListener('input', () => {
          localStorage.setItem('form-' + campo, input.value);
        });
      }
    });

    // Máscara de telefone

  telefone.addEventListener('keydown', function(e) {
    const teclasPermitidas = [8,9,46,37,38,39,40,36,35];
    if (teclasPermitidas.includes(e.keyCode)) return;
    if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) return;
    e.preventDefault();
  });

  telefone.addEventListener('input', () => {
    let val = telefone.value.replace(/\D/g, '');
    if (val.length > 11) val = val.slice(0, 11);
    if (val.length >= 11) {
      telefone.value = `(${val.slice(0,2)}) ${val.slice(2,7)}-${val.slice(7,11)}`;
    } else if (val.length >= 7) {
      telefone.value = `(${val.slice(0,2)}) ${val.slice(2,6)}-${val.slice(6)}`;
    } else if (val.length >= 3) {
      telefone.value = `(${val.slice(0,2)}) ${val.slice(2)}`;
    } else if (val.length >= 1) {
      telefone.value = `(${val}`;
    }
  });

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const email = form.email.value.trim();
      const emailRegex = /^[^\s@]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

      if (!emailRegex.test(email)) {
        msg.textContent = "E-mail inválido.";
        msg.className = "msg error";
        return;
      }

      const preenchido = campos.every(campo => form[campo].value.trim() !== '');
      if (!preenchido) {
        msg.textContent = "Preencha todos os campos.";
        msg.className = "msg error";
        return;
      }

      msg.textContent = "Enviando...";
      msg.className = "msg";

      const data = new FormData(form);

      fetch(form.action, {
        method: 'POST',
        body: data,
        headers: { 'Accept': 'application/json' }
      })
      .then(response => {
        if (response.ok) {
          msg.textContent = "Mensagem enviada com sucesso!";
          msg.className = "msg success";
          form.reset();
          campos.forEach(campo => localStorage.removeItem('form-' + campo));
        } else {
          msg.textContent = "Erro ao enviar. Tente novamente.";
          msg.className = "msg error";
        }
      })
      .catch(() => {
        msg.textContent = "Erro de conexão. Tente novamente.";
        msg.className = "msg error";
      });
    });