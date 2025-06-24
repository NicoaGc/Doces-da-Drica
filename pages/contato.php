  <div class="container">
    <form id="formContato" action="https://formsubmit.co/itsherogd2@gmail.com" method="POST">
      <div class="campo">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>
      </div>

      <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="campo">
        <label for="telefone">Telefone</label>
    <input type="tel" name="telefone" id="telefone" inputmode="numeric" required>
      </div>

      <div class="campo">
        <label for="produto">Produto de Interesse</label>
        <select name="produto" id="produto" required>
          <option value="">Escolha um produto</option>
          <option value="Bolos">Bolos</option>
          <option value="Doces Finos">Doces Finos</option>
          <option value="Brigadeiros Gourmet">Brigadeiros Tradicionais</option>
          <option value="Brigadeiros Gourmet">Brigadeiros Gourmet</option>
        </select>
      </div>

      <div class="campo">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" required>
      </div>

      <div class="campo">
        <label for="origem">Como nos conheceu?</label>
        <input type="text" name="origem" id="origem" required>
      </div>

      <div class="campo full">
        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" id="mensagem" rows="5" required></textarea>
      </div>

      <!-- Anti-spam e configs -->
      <input type="text" name="_honey" style="display:none">
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_next" value="https://seusite.com/validacao.php" />

      <div class="campo full">
        <button type="submit">Enviar</button>
        <div class="msg" id="msg"></div>
      </div>
    </form>
  </div>
  <div>
    <h2 class="text-center">Ou entre em contato pelo Whatsapp</h2>
          <div class="text-center mt-4">
        <a href="https://wa.me/554491159547" class="btn btn-success btn-whatsapp" target="_blank">
          <i class="fab fa-whatsapp me-2"></i>Entre em contato
        </a>
      </div>
</div>
  <iframe 
    class="mapa"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14546.292819840164!2d-52.089768264251084!3d-24.2916333948381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94edb594c9499fd9%3A0x4951517d2a2770e1!2s%C3%81guas%20de%20Jurema%2C%20Iretama%20-%20PR%2C%2087280-000!5e0!3m2!1spt-BR!2sbr!4v1750790496394!5m2!1spt-BR!2sbr"
    allowfullscreen="" 
    loading="lazy">
  </iframe>
