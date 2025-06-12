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
        <div class="col-md-6 text-center mb-4 mb-md-0 position-relative">
            <div id="carrossel-js" class="position-relative overflow-hidden" style="height: 300px;">
                <?php foreach ($imagens as $index => $imagem): ?>
                    <img src="<?= $imagem ?>" class="carrossel-img <?= $index === 0 ? 'ativo' : '' ?>">
                <?php endforeach; ?>
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



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const imagens = document.querySelectorAll('#carrossel-js img');
        const overlay = document.querySelector('.fade-overlay');
        let index = 0;

        setInterval(() => {
            overlay.style.opacity = '1';

            setTimeout(() => {
                imagens[index].classList.remove('ativo');
                index = (index + 1) % imagens.length;
                imagens[index].classList.add('ativo');
                overlay.style.opacity = '0';
            }, 300); // duração do fade branco
        }, 5000);
    });
</script>
