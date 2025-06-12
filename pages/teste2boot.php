<?php
// Array com os caminhos das imagens do produto
$imagens = [
    "images/bombombranco.jpg",
    "images/docesfinoscopo.jpg",
    "images/dcfinocoracao.jpg"
];
?>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div id="carouselBootstrap" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner rounded shadow">
                    <?php foreach ($imagens as $index => $imagem): ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <img src="<?= $imagem ?>" class="d-block w-100 img-fluid" alt="Imagem <?= $index + 1 ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">Nossos Doces Artesanais</h2>
            <p class="lead">
                Produzidos com muito carinho e ingredientes de qualidade.
                Descubra o sabor irresistível que encanta nossos clientes.
            </p>
        </div>
    </div>
</div>

<!-- Bootstrap JS: certifique-se que está incluído no seu projeto -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
