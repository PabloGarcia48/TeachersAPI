<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>API Educacional em Português</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<!-- Botão flutuante com tooltip -->
<button
  type="button"
  class="btn btn-warning position-fixed bottom-0 end-0 m-4"
  data-bs-toggle="modal"
  data-bs-target="#pixModal"
  title="Ajude a pagar um café para o desenvolvedor ☕"
>
  ☕ Apoie
</button>

<!-- Modal Pix -->
<div class="modal fade" id="pixModal" tabindex="-1" aria-labelledby="pixModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pixModalLabel">Ajude com um Pix 🙌</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body text-center">
        <p>Se este projeto te ajudou, considere apoiar com um Pix:</p>
        <p><strong>Chave Pix:</strong><br><code>pablomelhor@yahoo.com.br</code></p>
        <!-- QR Code gerado -->
        <img src="{{ asset('images/qrcode-pix.png') }}" alt="QR Code Pix" class="img-fluid my-3" />
        <p>Obrigado pelo apoio! ❤️</p>
      </div>
    </div>
  </div>
</div>

<body>

  <!-- Cabeçalho -->
  <header class="bg-primary text-white text-center py-5">
    <h1>API Educacional em Português</h1>
    <p class="lead">Pratique requisições HTTP com banco de dados real e documentação 100% em português</p>
    <a href="#endpoints" class="btn btn-light mt-3">Ver Endpoints</a>
  </header>

  <!-- Sobre o projeto -->
  <section class="container my-5">
    <h2>📘 Sobre</h2>
    <p>
      Esta API foi criada para ajudar professores e alunos de programação a entenderem como funcionam requisições
      do tipo <strong>GET, POST, PUT e DELETE</strong>, em um ambiente simples, seguro e em português.
    </p>
    <p>
      Ideal para testes com <code>fetch</code>, <code>axios</code> ou outras bibliotecas frontend.
    </p>
  </section>

  <!-- Endpoints disponíveis -->
  <section id="endpoints" class="container my-5">
    <h2>🔗 Endpoints disponíveis</h2>
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>Método</th>
          <th>Rota</th>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>GET</td>
          <td>/carros</td>
          <td>Lista todos os carros</td>
        </tr>
        <tr>
          <td>POST</td>
          <td>/carros</td>
          <td>Adiciona um novo carro</td>
        </tr>
        <tr>
          <td>PUT</td>
          <td>/carros/:id</td>
          <td>Atualiza os dados de um carro</td>
        </tr>
        <tr>
          <td>DELETE</td>
          <td>/carros/:id</td>
          <td>Remove um carro</td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- Exemplos de uso -->
  <section class="container my-5">
    <h2>🧪 Exemplos com JavaScript</h2>
    <p>Use os exemplos abaixo para testar os métodos disponíveis da API.</p>

    <!-- Fetch GET -->
    <h4 class="mt-4 text-primary">🔍 GET - Buscar todos os carros (fetch)</h4>
    <div class="position-relative">
      <button class="btn btn-sm btn-secondary position-absolute top-0 end-0 m-2 copy-btn" data-target="code1">Copiar</button>
      <pre><code id="code1" class="bg-light p-2 d-block">
fetch('https://api-professores-main-2dg03s.laravel.cloud/api/carros')
  .then(res => res.json())
  .then(data => console.log(data))
  .catch(err => console.error(err));
      </code></pre>
    </div>

    <!-- Fetch POST -->
    <h4 class="mt-4 text-primary">🆕 POST - Criar novo carro (fetch)</h4>
    <div class="position-relative">
      <button class="btn btn-sm btn-secondary position-absolute top-0 end-0 m-2 copy-btn" data-target="code2">Copiar</button>
      <pre><code id="code2" class="bg-light p-2 d-block">
fetch('https://api-professores-main-2dg03s.laravel.cloud/api/carros', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    modelo: "Gol",
    marca: "Volkswagen"
  })
})
.then(res => res.json())
.then(data => console.log(data))
.catch(err => console.error(err));
      </code></pre>
    </div>

    <!-- Fetch PUT -->
    <h4 class="mt-4 text-primary">✏️ PUT - Atualizar carro (fetch)</h4>
    <div class="position-relative">
      <button class="btn btn-sm btn-secondary position-absolute top-0 end-0 m-2 copy-btn" data-target="code3">Copiar</button>
      <pre><code id="code3" class="bg-light p-2 d-block">
fetch('https://api-professores-main-2dg03s.laravel.cloud/api/carros/1', {
  method: 'PUT',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    modelo: "Gol G6",
    marca: "Volkswagen"
  })
})
.then(res => res.json())
.then(data => console.log(data))
.catch(err => console.error(err));
      </code></pre>
    </div>

    <!-- Fetch DELETE -->
    <h4 class="mt-4 text-primary">🗑️ DELETE - Remover carro (fetch)</h4>
    <div class="position-relative">
      <button class="btn btn-sm btn-secondary position-absolute top-0 end-0 m-2 copy-btn" data-target="code4">Copiar</button>
      <pre><code id="code4" class="bg-light p-2 d-block">
fetch('https://api-professores-main-2dg03s.laravel.cloud/api/carros/1', {
  method: 'DELETE'
})
.then(res => res.json())
.then(data => console.log(data))
.catch(err => console.error(err));
      </code></pre>
    </div>

    <hr>
    <h3 class="mt-5 text-success">💡 CRUD com Axios</h3>

    <!-- Axios GET -->
    <h4 class="mt-4 text-success">🔍 GET - Buscar todos os carros (axios)</h4>
    <div class="position-relative">
      <button class="btn btn-sm btn-secondary position-absolute top-0 end-0 m-2 copy-btn" data-target="code5">Copiar</button>
      <pre><code id="code5" class="bg-light p-2 d-block">
axios.get('https://api-professores-main-2dg03s.laravel.cloud/api/carros')
  .then(res => console.log(res.data))
  .catch(err => console.error(err));
      </code></pre>
    </div>

    <!-- Axios POST -->
    <h4 class="mt-4 text-success">🆕 POST - Criar novo carro (axios)</h4>
    <div class="position-relative">
      <button class="btn btn-sm btn-secondary position-absolute top-0 end-0 m-2 copy-btn" data-target="code6">Copiar</button>
      <pre><code id="code6" class="bg-light p-2 d-block">
axios.post('https://api-professores-main-2dg03s.laravel.cloud/api/carros', {
  modelo: "Onix",
  marca: "Chevrolet"
})
.then(res => console.log(res.data))
.catch(err => console.error(err));
      </code></pre>
    </div>

    <!-- Axios PUT -->
    <h4 class="mt-4 text-success">✏️ PUT - Atualizar carro (axios)</h4>
    <div class="position-relative">
      <button class="btn btn-sm btn-secondary position-absolute top-0 end-0 m-2 copy-btn" data-target="code7">Copiar</button>
      <pre><code id="code7" class="bg-light p-2 d-block">
axios.put('https://api-professores-main-2dg03s.laravel.cloud/api/carros/2', {
  modelo: "Onix Plus",
  marca: "Chevrolet"
})
.then(res => console.log(res.data))
.catch(err => console.error(err));
      </code></pre>
    </div>

    <!-- Axios DELETE -->
    <h4 class="mt-4 text-success">🗑️ DELETE - Remover carro (axios)</h4>
    <div class="position-relative">
      <button class="btn btn-sm btn-secondary position-absolute top-0 end-0 m-2 copy-btn" data-target="code8">Copiar</button>
      <pre><code id="code8" class="bg-light p-2 d-block">
axios.delete('https://api-professores-main-2dg03s.laravel.cloud/api/carros/2')
  .then(res => console.log(res.data))
  .catch(err => console.error(err));
      </code></pre>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="bg-dark text-white text-center py-4">
    <p>Feito com ❤️ para fins educacionais | Desenvolvido por Pablo Garcia</p>
    <small>Contato: pablorobertodev@gmail.com</small>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script de copiar código -->
  <script>
    document.querySelectorAll('.copy-btn').forEach(button => {
      button.addEventListener('click', () => {
        const targetId = button.getAttribute('data-target');
        const code = document.getElementById(targetId).innerText;

        navigator.clipboard.writeText(code).then(() => {
          button.innerText = 'Copiado!';
          setTimeout(() => button.innerText = 'Copiar', 1500);
        }).catch(err => {
          console.error('Erro ao copiar:', err);
        });
      });
    });
  </script>
</body>
</html>
