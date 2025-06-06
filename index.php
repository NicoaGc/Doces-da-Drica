<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Delicias da Drica</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="produtos.php">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>
<body>
<header class="" >
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <img src="images/logodeliciasdadrica.jpg" alt="Logo" class="rounded-circle" style="height: 50px; width: auto;">
        <span class="fw-bold text-white">Delicias da Drica</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Sobre</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Produtos</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="bg-roxo">
  <div class="container mt-5 ">
    <h1 class="text-center mb-4">Bem-vindo ao Delicias da Drica</h1>
    <p class="text-center">Aqui você encontra os melhores doces finos para todas as ocasiões!</p>
  </div>
</section>
<?php
$produtos = [
    [
        'imagem' => 'images/docesfinoscopo.jpg',
        'nome' => 'Copo de chocolate ',
        'descricao' => 'Um copo de chocolate com o recheio que quiser!'
    ],
    [
        'imagem' => 'images/bombombranco.jpg',
        'nome' => 'Bombom',
        'descricao' => 'O melhor doce do seu jeito.'
    ],
    [
        'imagem' => 'https://via.placeholder.com/300x200',
        'nome' => 'Produto 3',
        'descricao' => 'Descrição do produto 3.'
    ]
];
?>
<div class="container mt-4">
    <div class="row">
        <?php foreach ($produtos as $produto): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= htmlspecialchars($produto['imagem']) ?>" class="card-img-top" alt="Imagem do Produto">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= htmlspecialchars($produto['nome']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($produto['descricao']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<p>
  <a href="sobre.php">Sobre</a>
</p>
    <footer>
        <p>&copy; 2023 Doces da Drica. Todos os direitos reservados.</p>
        <p>Desenvolvido por Nicolas </p>
        <p>
            <a href="#" title="fa-square-instagram" alt="Instagram" class="instagram"> <i class='bx bxl-instagram'></i> </a> 
        </p>    
    </footer>
</body>
</html>