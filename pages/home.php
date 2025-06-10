<section class="bg-roxo">
  <div class="container mt-5 ">
    <h1 class="text-center mb-4">Bem-vindo ao Delicias da Drica</h1>
    <p class="text-center">Aqui você encontra os melhores doces finos para todas as ocasiões!</p>
  </div>
</section>
<section class="card-separation">
<div class="card-section">
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
              <div class="text-center d-flex justify-content-center gap-2">
              <a href="docesfinos" class="btn btn-primary">Entre em contato</a>
              <a href="#" class="btn btn-outline-secondary" title="Saiba mais">i</a>
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