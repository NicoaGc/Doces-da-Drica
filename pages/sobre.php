<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6 text-center">

      <img src="images/perfil.jpeg" alt="Foto da confeiteira" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">

      <blockquote class="blockquote">
        <p class="mb-3 text-black">
          Desde os 14 anos eu já ajudava minha mãe a fazer os bolos de aniversário da família. Foi assim que descobri minha paixão pela confeitaria. Sempre que via uma receita, corria para testar. Comecei fazendo doces, mas logo me encantei pelos bolos — e foi aí que surgiu o <strong>"Delícias da Drica"</strong>. Então decidi me profissionalizar e fiz um curso de confeitaria no Senac para me aperfeiçoar ainda mais. Já são 6 anos nessa doce caminhada!
        </p>
        <p class="blockquote-footer text-black">Adriana, fundadora da Delícias da Drica</p>
      </blockquote>
    </div>
  </div>
</div>    
<h3 class="text-center text-black" >É Belo ver um sonho se tornando realidade, quer ver os frutos desse sonho?</h3>
<div class="container">
  <div class="row">
    <?php foreach ($delicias as $delicia): ?>
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="h-100 d-flex flex-column text-start p-2">
          <div class="fino-img-wrapper position-relative">
            <?php 
              $imagens = is_array($delicia['imagem']) ? $delicia['imagem'] : [$delicia['imagem']];
              foreach ($imagens as $i => $img): 
            ?>
              <img src="<?= htmlspecialchars($img) ?>" class="img-<?= $i ?>" alt="<?= htmlspecialchars($delicia['nome']) ?>">
            <?php endforeach; ?>
          </div>
          <div class="p-2 d-flex flex-column justify-content-between">
            <!-- outros conteúdos -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<section>
    <div class="text-center mt-auto">
        <a href="produtos" class="btn btn-md btn-primary">Quero ver</a>
    </div>
</section>
