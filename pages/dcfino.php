<body>
<?php
// Array com os caminhos das imagens do produto
$imagens = [
    "images/bombombranco.jpg",
    "images/docesfinoscopo.jpg",
    "images/dcfinocoracao.jpg"
];
?>

<?php
$imagens = ['imagem1.jpg', 'imagem2.jpg', 'imagem3.jpg'];
?>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-center mb-4 mb-md-0">
            <div id="carrossel-js">
                <?php foreach ($imagens as $index => $imagem): ?>
                    <img src="<?= $imagem ?>" class="img-fluid rounded shadow <?= $index === 0 ? 'ativo' : '' ?>" style="display: <?= $index === 0 ? 'block' : 'none' ?>;">
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
        let index = 0;

        setInterval(() => {
            const atual = imagens[index];
            atual.classList.remove('ativo');
            atual.classList.add('fade-out');

            index = (index + 1) % imagens.length;
            const proxima = imagens[index];

            // Espera a transição do fade-out
            setTimeout(() => {
                atual.classList.remove('fade-out');
                proxima.classList.add('ativo');
            }, 1000); // deve bater com o `transition` de 1s
        }, 5000);
    });
</script>

</body>

