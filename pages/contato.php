<style>
    form { max-width: 400px; margin: auto; background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
    input, textarea { width: 100%; padding: 0.6rem; margin: 0.5rem 0 1rem; border: 1px solid #ccc; border-radius: 4px; }
    button { background: #28a745; color: white; border: none; padding: 0.8rem 1.2rem; border-radius: 4px; cursor: pointer; }
    button:disabled { background: #ccc; cursor: not-allowed; }
    .msg { margin-top: 1rem; font-weight: bold; }
    .msg.success { color: green; }
    .msg.error { color: red; }
  </style>
  <form id="formContato" action="https://formsubmit.co/itsherogd2@gmail.com" method="POST">
    <input type="text" name="nome" id="nome" placeholder="Seu nome" required />
    <input type="email" name="email" id="email" placeholder="Seu e-mail" required />
    <textarea name="mensagem" id="mensagem" rows="5" placeholder="Sua mensagem" required></textarea>

    <!-- anti-spam honeypot (recomendado) -->
    <input type="text" name="_honey" style="display:none" />
    <!-- redirecionar após sucesso (opcional) -->
    <input type="hidden" name="_next" value="https://seusite.com/validacao.php" />
    <!-- desabilitar captcha -->
    <input type="hidden" name="_captcha" value="false" />

    <button type="submit">Enviar</button>
    <div class="msg" id="msg"></div>
  </form>

<script>
  const form = document.getElementById('formContato');
  const msg = document.getElementById('msg');

  // Recupera dados do localStorage ao carregar
  window.addEventListener('load', () => {
    form.nome.value = localStorage.getItem('form-nome') || '';
    form.email.value = localStorage.getItem('form-email') || '';
    form.mensagem.value = localStorage.getItem('form-mensagem') || '';
  });

  // Salva no localStorage enquanto o usuário digita
  form.nome.addEventListener('input', () => localStorage.setItem('form-nome', form.nome.value));
  form.email.addEventListener('input', () => localStorage.setItem('form-email', form.email.value));
  form.mensagem.addEventListener('input', () => localStorage.setItem('form-mensagem', form.mensagem.value));

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const nome = form.nome.value.trim();
    const email = form.email.value.trim();
    const mensagem = form.mensagem.value.trim();

    const emailRegex = /^[^\s@]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    if (!nome || !email || !mensagem) {
      msg.textContent = "Preencha todos os campos.";
      msg.className = "msg error";
      return;
    }

    if (!emailRegex.test(email)) {
      msg.textContent = "E-mail inválido.";
      msg.className = "msg error";
      return;
    }

    msg.textContent = "Enviando...";
    msg.className = "msg";

    const data = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: data,
      headers: { 'Accept': 'application/json' }
    })
    .then(response => {
      if (response.ok) {
        msg.textContent = "Mensagem enviada com sucesso!";
        msg.className = "msg success";
        form.reset();

        // Limpa localStorage após envio
        localStorage.removeItem('form-nome');
        localStorage.removeItem('form-email');
        localStorage.removeItem('form-mensagem');
      } else {
        msg.textContent = "Erro ao enviar. Tente novamente.";
        msg.className = "msg error";
      }
    })
    .catch(() => {
      msg.textContent = "Erro de conexão. Tente novamente.";
      msg.className = "msg error";
    });
  });
</script>