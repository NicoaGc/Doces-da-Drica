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
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>

<section class="bg-roxo">
  <div class="container mt-5 ">
    <h1 class="text-center text-black mb-4">Bem-vindo ao Delicias da Drica</h1>
    <p class="text-center text-black">Aqui você encontra os melhores doces para todas as ocasiões!</p>
  </div>
</section>
<div class="carousel-doces-container position-relative">
  <h1 class="title text-center text-black">Bolos</h1>
  <h2 class="section-title text-center text-black">Decorações</h>

<!-- Botão Esquerda -->
<button class="carousel-arrow left" onclick="scrollCarousel(-1, 'carousel', 'carousel-doces-wrapper', 'doce-card')">❮</button>

<!-- Carrossel -->
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

<!-- Botão Direita -->
<button class="carousel-arrow right" onclick="scrollCarousel(1, 'carousel', 'carousel-doces-wrapper', 'doce-card')">❯</button>

</div>
<div>
  <h1 class="title text-center text-black">Doces finos</h1>

<div class="container">
  <div class="row">
    <?php foreach ($dcfinos as $dcfino): ?>
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="fino-card h-100 d-flex flex-column text-start p-2">
          <div class="fino-img-wrapper position-relative">
            <?php foreach ($dcfino['imagem'] as $i => $img): ?>
              <img src="<?= htmlspecialchars($img) ?>" class="fino-card-img img-<?= $i ?>" alt="<?= htmlspecialchars($dcfino['nome']) ?>">
            <?php endforeach; ?>
          </div>
          <div class="fino-card-body p-2 d-flex flex-column justify-content-between">
            <h5 class="mb-1 text-dark"><?= htmlspecialchars($dcfino['nome']) ?></h5>
            <p class="text-dark"><?= htmlspecialchars($dcfino['descricao']) ?></p>
            <div class="text-center mt-auto">
              <a href="docesfinos" class="btn btn-sm btn-primary">Entre em contato</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<div>
  <h1 class="title text-center text-black">Brigadeiros clássicos e Gourmets</h1>

<div class="container">
  <div class="row justify-content-center">
    <?php foreach ($brigadeiros as $brigadeiro): ?>
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="fino-card h-100 d-flex flex-column text-start p-2">
          <div class="fino-img-wrapper position-relative">
            <?php foreach ($brigadeiro['imagem'] as $i => $img): ?>
              <img src="<?= htmlspecialchars($img) ?>" class="fino-card-img img-<?= $i ?>" alt="<?= htmlspecialchars($brigadeiro['nome']) ?>">
            <?php endforeach; ?>
          </div>
          <div class="fino-card-body p-2 d-flex flex-column justify-content-between">
            <h5 class="mb-1 text-dark"><?= htmlspecialchars($brigadeiro['nome']) ?></h5>
            <p class="text-dark"><?= htmlspecialchars($brigadeiro['descricao']) ?></p>
            <div class="text-center mt-auto">
              <a href="<?= htmlspecialchars($brigadeiro['link']) ?>" class="btn btn-sm btn-primary">Entre em contato</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
