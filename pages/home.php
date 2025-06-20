<section class="hero-banner text-white d-flex align-items-center justify-content-center">

  <!-- Botão fixado no canto inferior esquerdo -->
  <a href="#experimente" class="btn btn-primary position-absolute" style="bottom: 100px; left: 160px;">
    Quero experimentar
  </a>
</section>
<div class="carousel-doces-container position-relative">
  <h2 class="section-title">Mais Vendidos</h2>


  <button class="carousel-arrow left" onclick="scrollCarousel(-1)">❮</button>

  <div class="container-xxl">
    <div class="carousel-doces-wrapper">
      <div class="carousel-doces" id="carousel">
        <?php foreach ($produtos as $produto): ?>
          <div class="doce-card text-start p-2">
            <img src="<?= htmlspecialchars($produto['imagem']) ?>" class="doce-card-img" alt="<?= htmlspecialchars($produto['nome']) ?>">
            <div class="doce-card-body p-2 d-flex flex-column justify-content-between">
              <h5 class="mb-1 text-dark"><?= htmlspecialchars($produto['nome']) ?></h5>
              <p class="text-dark"><?= htmlspecialchars($produto['descricao']) ?></p>
              <div class="text-center mt-auto">
                <a href="produtos" class="btn btn-sm btn-primary">Entre em contato</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- ❯ Seta direita FORA da .container-xxl -->
  <button class="carousel-arrow right" onclick="scrollCarousel(1)">❯</button>
</div>


<script>
function scrollCarousel(direction) {
  const carousel = document.getElementById('carousel');
  const cardWidth = 400; // largura fixa do card em px (igual no CSS)
  
  // Calcula o novo scrollLeft
  carousel.scrollBy({
    left: cardWidth * direction,
    behavior: 'smooth'
  });
}

</script>


<section class="bg-roxo">
  <div class="container mt-5 ">
    <h1 class="text-center text-black mb-4">Bem-vindo ao Delicias da Drica</h1>
    <p class="text-center text-black">Aqui você encontra os melhores doces para todas as ocasiões!</p>
  </div>
</section>
<section class="card-separation">
<div class="card-section text-black text-center">
Bolos
</div>
<div class="container mt-4">
  <div class="row">
    <?php foreach ($bolos as $bolo): ?>
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100 card-cake">
        <img src="<?= htmlspecialchars($bolo['imagem']) ?>" class="card-img-top" alt="Imagem do produto">
          <div class="card-body text-start">
            <h5 class="card-title"><?= htmlspecialchars($bolo['nome']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($bolo['descricao']) ?></p>
            <div class="text-center">
              <div class="text-center d-flex justify-content-center">
              <a href="bolos" class="btn btn-primary">Entre em contato</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</section>
<section class="card-separation">
<div class="card-section text-black text-center">
  Doces Finos
</div>
<div class="container mt-4">
  <div class="row">
    <?php foreach ($produtos as $produto): ?>
      <div class="col-12 col-sm-6 col-md-3 mb-4">
        <div class="card h-100 card-custom">
          <img src="<?= htmlspecialchars($produto['imagem']) ?>" class="card-img-top" alt="Imagem do produto" style="height: 150px; object-fit: cover;">
          <div class="card-body text-start">
            <h5 class="card-title"><?= htmlspecialchars($produto['nome']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($produto['descricao']) ?></p>
            <div class="text-center">
              <div class="text-center d-flex justify-content-center">
              <a href="docesfinos" class="btn btn-primary">Entre em contato</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</section>
<p>
  <a href="sobre.php">Sobre</a>
</p>