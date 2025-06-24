<div class="container my-4">
  <div class="row align-items-center">
    <!-- Imagem à esquerda (desktop) / cima (mobile) -->
    <div class="col-12 col-md-6 mb-4 mb-md-0">
      <div class="produto-carrossel-wrapper" id="carrossel-produto">
        <?php foreach ($brigat as $i => $img): ?>
          <img 
            src="<?= htmlspecialchars($img) ?>" 
            alt="Imagem <?= $i + 1 ?>"
            class="<?= $i === 0 ? 'imagem-visivel' : '' ?>">
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Texto à direita (desktop) / abaixo (mobile) -->
    <div class="col-12 col-md-6 produto-info">
      <h1 class="fw-bold text-black mb-3">Nossos Brigadeiros Tradicionais</h1>
      <p class="lead text-black">
        Produzidos com muito carinho e ingredientes de qualidade.<br>
        Descubra o sabor irresistível que encanta.
      </p>
<h2 class="text-black">Sabores</h2>
<p class="text-black">
  Beijinho, Brigadeiro, Bicho de pé, Ouriço, Cajuzinho, Maracujá, Limão, Ninho, Casadinho, Amendoim, Romeu e Julieta.
</p>
      <h3 class="text-black">Valor do cento</h3>
      <h3 class="text-success">R$170,00</h3>
<p class="text-black"><strong>Observação:</strong> Escolher até 3 sabores por cento. Após a escolha, informar a cor das forminhas.</p>

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
