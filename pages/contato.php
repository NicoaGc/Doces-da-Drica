  <style>
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 0 20px;
    }

    form {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 10px #ccc;
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: space-between;
    }

    form .campo {
      flex: 1 1 48%;
      display: flex;
      flex-direction: column;
    }

    form .campo.full {
      flex: 1 1 100%;
    }

    input, textarea, select {
      padding: 0.8rem;
      margin-top: 0.3rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }

    textarea {
      resize: vertical;
    }

    button {
      background: #28a745;
      color: white;
      border: none;
      padding: 0.8rem 1.2rem;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
      margin-top: 1rem;
    }

    .msg {
      margin-top: 1rem;
      font-weight: bold;
    }

    .msg.success { color: green; }
    .msg.error { color: red; }

    .mapa {
      width: 100%;
      height: 350px;
      border: none;
      margin: 3rem auto 2rem;
      display: block;
      border-radius: 8px;
      box-shadow: 0 0 10px #ccc;
    }

    @media (max-width: 768px) {
      form {
        flex-direction: column;
      }

      form .campo {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <form id="formContato" action="https://formsubmit.co/seuemail@exemplo.com" method="POST">
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
      <input type="hidden" name="_next" value="https://seusite.com/obrigado.html" />

      <div class="campo full">
        <button type="submit">Enviar</button>
        <div class="msg" id="msg"></div>
      </div>
    </form>
  </div>

  <iframe 
    class="mapa"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14546.292819840164!2d-52.089768264251084!3d-24.2916333948381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94edb594c9499fd9%3A0x4951517d2a2770e1!2s%C3%81guas%20de%20Jurema%2C%20Iretama%20-%20PR%2C%2087280-000!5e0!3m2!1spt-BR!2sbr!4v1750790496394!5m2!1spt-BR!2sbr"
    allowfullscreen="" 
    loading="lazy">
  </iframe>

  <script>
    const form = document.getElementById('formContato');
    const msg = document.getElementById('msg');
    const telefone = document.getElementById('telefone');

    const campos = ['nome', 'email', 'telefone', 'produto', 'mensagem', 'cidade', 'origem'];

    // Salvar e recuperar do localStorage
    window.addEventListener('load', () => {
      campos.forEach(campo => {
        const input = form[campo];
        if (input) input.value = localStorage.getItem('form-' + campo) || '';
      });
    });

    campos.forEach(campo => {
      const input = form[campo];
      if (input) {
        input.addEventListener('input', () => {
          localStorage.setItem('form-' + campo, input.value);
        });
      }
    });

    // Máscara de telefone

  telefone.addEventListener('keydown', function(e) {
    const teclasPermitidas = [8,9,46,37,38,39,40,36,35];
    if (teclasPermitidas.includes(e.keyCode)) return;
    if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) return;
    e.preventDefault();
  });

  telefone.addEventListener('input', () => {
    let val = telefone.value.replace(/\D/g, '');
    if (val.length > 11) val = val.slice(0, 11);
    if (val.length >= 11) {
      telefone.value = `(${val.slice(0,2)}) ${val.slice(2,7)}-${val.slice(7,11)}`;
    } else if (val.length >= 7) {
      telefone.value = `(${val.slice(0,2)}) ${val.slice(2,6)}-${val.slice(6)}`;
    } else if (val.length >= 3) {
      telefone.value = `(${val.slice(0,2)}) ${val.slice(2)}`;
    } else if (val.length >= 1) {
      telefone.value = `(${val}`;
    }
  });

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const email = form.email.value.trim();
      const emailRegex = /^[^\s@]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

      if (!emailRegex.test(email)) {
        msg.textContent = "E-mail inválido.";
        msg.className = "msg error";
        return;
      }

      const preenchido = campos.every(campo => form[campo].value.trim() !== '');
      if (!preenchido) {
        msg.textContent = "Preencha todos os campos.";
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
          campos.forEach(campo => localStorage.removeItem('form-' + campo));
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