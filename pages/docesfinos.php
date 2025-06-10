<?php
// Array com os caminhos das imagens do produto
$imagens = [
    "images/bombombranco.jpg",
    "images/docesfinoscopo.jpg",
    "images/dcfinocoracao.jpg"
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Doces Finos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
        <img src="images/docesfinoscopo.jpg" class="img-fluid" alt="Imagem de teste">
        </div>
        <div class="col-md-6">
            <h2>Doces Finos</h2>
            <p>Descrição de exemplo para testar se o grid está funcionando corretamente.</p>
        </div>
    </div>
</div>

<script>
    const imagens = <?php echo json_encode($imagens); ?>;
    let index = 0;
    const img = document.getElementById('carousel-img');

    setInterval(() => {
        img.classList.remove('fade-in');
        img.classList.add('fade-out');

        setTimeout(() => {
            index = (index + 1) % imagens.length;
            img.src = imagens[index];
            img.classList.remove('fade-out');
            img.classList.add('fade-in');
        }, 1000); // tempo do fade-out antes de trocar a imagem
    }, 5000); // troca a cada 5 segundos
</script>

</body>

