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
          <li class="nav-item"><a class="nav-link text-white" href="home">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="produtos">Produtos</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="sobre">Contato</a></li>
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
      include "page/erro.php";
    }
    
  ?>
</main>

    <footer>
        <p>&copy; 2023 Doces da Drica. Todos os direitos reservados.</p>
        <p>Desenvolvido por Nicolas </p>
        <p>
            <a href="#" title="fa-square-instagram" alt="Instagram" class="instagram"> <i class='bx bxl-instagram'></i> </a> 
        </p>    
    </footer>
</body>
</html>