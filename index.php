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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="index.js"></script>
    </head>
    <body>
<div class="layout">
<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="home">
        <img src="images/logodel.png" alt="Logo"  style="height: 100px; width: auto;">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
  <li class="nav-item">
    <a class="nav-link text-white" href="home">
      <i class="fas fa-home" style="margin-right: 6px;"></i> Home
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="sobre">
      <i class="fas fa-info-circle" style="margin-right: 6px;"></i> Sobre
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="produtos">
      <i class="fas fa-box-open" style="margin-right: 6px;"></i> Produtos
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="contato">
      <i class="fas fa-envelope" style="margin-right: 6px;"></i> Contato
    </a>
  </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main>
  <?php
    $pagina = $_GET["param"] ?? "home";

    $pagina = "pages/{$pagina}.php";
    include "arrays.php";
    if (file_exists($pagina)) {
      include $pagina;
    } else{
      include "pages/erro.php";
    }
    
  ?>
  </div>
</main>

<footer class="text-center py-2">
  <div class="container">
    <img src="images/logodeliciasdadrica.jpg" alt="Logo Doces da Drica" class="mb-1 rounded-circle">
    <p class="mb-0">&copy; 2023 Doces da Drica. Todos os direitos reservados. Desenvolvido por Nicolas.</p>
    <p class="mt-1 mb-0">
      <a href="https://www.instagram.com/deliciasdadrica11?utm_source=qr&igsh=MW9naG5ucGZydmJrYg==" title="Instagram" aria-label="Instagram" class="text-white fs-5 instagram">
        <i class='bx bxl-instagram' aria-hidden="true"></i>
      </a>
    </p>
  </div>
</footer>
</div>
<!-- Bootstrap 5 JavaScript Bundle (necessário para o menu funcionar no mobile) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>