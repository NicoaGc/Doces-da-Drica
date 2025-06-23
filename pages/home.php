<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($imagens as $index => $imagem): ?>
      <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
        <img src="<?= htmlspecialchars($imagem) ?>" class="d-block w-100 hero-img" alt="Banner <?= $index + 1 ?>">
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Setas de navegação -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="text-black">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="text-black" >Próximo</span>
  </button>
</div>

<div class="carousel-doces-container position-relative">
  <h1 class="title text-center text-black">Bolos</h1>
  <h2 class="section-title text-center text-black">Decorações</h>

  <button class="carousel-arrow left" onclick="scrollCarousel(-1)">❮</button>

  <div class="container-xxl">
    <div class="carousel-doces-wrapper">
      <div class="carousel-doces" id="carousel">
        <?php foreach ($bolos as $bolo): ?>
          <div class="doce-card h-100 d-flex flex-column text-start p-2">
            <img src="<?= htmlspecialchars($bolo['imagem']) ?>" class="doce-card-img" alt="<?= htmlspecialchars($bolo['nome']) ?>">
            <div class="doce-card-body p-2 d-flex flex-column justify-content-between">
              <h5 class="mb-1 text-dark"><?= htmlspecialchars($bolo['nome']) ?></h5>
              <p class="text-dark"><?= htmlspecialchars($bolo['descricao']) ?></p>
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