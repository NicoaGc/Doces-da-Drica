<body>
<?php
// Array com os caminhos das imagens do produto
$imagens = [
    "images/bombombranco.jpg",
    "images/doces2finoscopo.jpg",
    "images/dcfinocoracao.jpg"
];
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
            <h1 class="text-black fw-bold mb-3">Nossos Doces Finos</h1>
            <p class="text-black lead">
                Produzidos com muito carinho e ingredientes de qualidade.
                Descubra o sabor irresistível que encanta.
            </p>
            <div>
            <h1 class="text-black">Valor do cento</h1>
            <h3 class="text-black">R$290,00</h3>
            <h2 class="text-black">Sabores</h2>
                <p>
                    Chocolate ao leite, Chocolate branco e Chocolate meio amargo
                </p>
            <h2 class="text-black">Recheios</h2>
                <p>Mousse de Nutella, Mousse de Morango, Mousse de Limão, Brigadeiro, Maracujá, Ninho</p>
            </div>
            <div class="text-center">
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="whatsapp btn btn-success" type="button"><i class="fa-brands fa-whatsapp"></i>Entre em contato</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
const imagens = document.querySelectorAll('#carrossel-js img');
let indexAtual = 0;

function mostrarImagem(novoIndex) {
  if (novoIndex === indexAtual) return;

  const atual = imagens[indexAtual];
  const proxima = imagens[novoIndex];

  // Fade out atual
  atual.style.transition = 'opacity 0.5s ease';
  atual.style.opacity = 0;

  // Depois do fade out, esconde atual e mostra próximo com fade in
  setTimeout(() => {
    atual.style.display = 'none';
    atual.classList.remove('ativo');

    proxima.style.display = 'block';
    proxima.style.opacity = 0;
    proxima.classList.add('ativo');

    // Fade in proxima
    setTimeout(() => {
      proxima.style.transition = 'opacity 0.5s ease';
      proxima.style.opacity = 1;
    }, 50);

    indexAtual = novoIndex;
  }, 500);
}

// Exemplo: Avançar para a próxima imagem a cada 3s
setInterval(() => {
  let proximoIndex = (indexAtual + 1) % imagens.length;
  mostrarImagem(proximoIndex);
}, 3000);

</script>

</body>

