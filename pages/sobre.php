<?php
$produtos = [
    [
        'nome' => 'Camiseta Feminina',
        'preco' => 49.90,
        'imagem' => 'camiseta.jpg'
    ],
    [
        'nome' => 'Bolsa de Couro',
        'preco' => 199.00,
        'imagem' => 'bolsa.jpg'
    ],
    [
        'nome' => 'Tênis Esportivo',
        'preco' => 299.99,
        'imagem' => 'tenis.jpg'
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos da Cliente</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">Produtos da Cliente</h1>
        <div class="row g-4">
            <?php foreach ($produtos as $produto): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= $produto['imagem'] ?>" class="card-img-top" alt="<?= $produto['nome'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produto['nome'] ?></h5>
                            <p class="card-text">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap JS (opcional para interatividade) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
