<div class="container my-4">
  <div class="row align-items-center">
    <!-- Imagem à esquerda (desktop) / cima (mobile) -->
    <div class="col-12 col-md-6 mb-4 mb-md-0">
      <div class="produto-carrossel-wrapper" id="carrossel-produto">
        <?php foreach ($bolospro as $i => $img): ?>
          <img 
            src="<?= htmlspecialchars($img) ?>" 
            alt="Imagem <?= $i + 1 ?>"
            class="<?= $i === 0 ? 'imagem-visivel' : '' ?>">
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Texto à direita (desktop) / abaixo (mobile) -->
    <div class="col-12 col-md-6 produto-info">
      <h1 class="fw-bold text-black mb-3">Nossos Bolos</h1>
      <p class="lead text-black">
        Produzidos com muito carinho e ingredientes de qualidade.<br>
        Descubra o sabor irresistível que encanta.
      </p>
<h2 class="text-black">Sabores</h2>
<h2 class="text-success fs-5">R$ 45,00/kg</h2>
<p class="text-black">
  Doce de leite com abacaxi, Doce de leite com pêssego, Doce de leite com coco, Cocada com abacaxi, Doce de leite puro.
</p>

<h2 class="text-success fs-5">R$ 55,00/kg</h2>
<p class="text-black">
  Creme belga com pêssego, Creme belga com abacaxi, Maracujá trufado, Sensação, Prestígio, Ouro Branco, Sonho de Valsa.
</p>

<h2 class="text-success fs-5">R$ 65,00/kg</h2>
<p class="text-black">
  Brigadeiro com KitKat, Floresta Negra, Dois Amores, Brigadeiro com morango, 4 Leites Trufado, Ninho com morango, Ninho com Nutella, Ferrero Rocher.
</p>


      <h2 class="text-black">Informações adicionais</h2>
      <p class="text-black"><strong>Sabores de massa:</strong> Baunilha ou chocolate</p>
      <p class="text-black"><strong>Decoração:</strong> Com brilho e pó dourado (acréscimo de R$ 10,00)</p>
      <div class="text-center mt-4">
        <a href="https://wa.me/554491159547" class="btn btn-success btn-whatsapp" target="_blank">
          <i class="fab fa-whatsapp me-2"></i>Entre em contato
        </a>
      </div>
    </div>
  </div>
</div>
<script>
    const carrosselContainer = document.querySelector('#carrossel-produto');
  const imagens = carrosselContainer.querySelectorAll('img');
  let atual = 0;

  setInterval(() => {
    imagens[atual].classList.remove('imagem-visivel');
    atual = (atual + 1) % imagens.length;
    imagens[atual].classList.add('imagem-visivel');
  }, 3000);
  
</script>
