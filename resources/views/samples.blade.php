<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Testar Endpoints - API Educacional</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header class="bg-primary text-white text-center py-4">
    <h1>🔧 Testes Interativos com a API</h1>
    <p class="lead">Experimente os métodos GET, POST, PUT e DELETE de forma prática</p>
    <a href="{{ url('/') }}" class="btn btn-light mt-2">⬅ Voltar</a>
  </header>

  <main class="container py-5">
    <div class="row g-4">
      <!-- GET -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">🔍 GET - Listar Carros</h5>
            <button class="btn btn-primary" onclick="testarGET()">Executar</button>
            <pre class="bg-light mt-3 p-2"><code id="res-get"></code></pre>
          </div>
        </div>
      </div>

      <!-- POST -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">🆕 POST - Criar Carro</h5>
            <input type="text" class="form-control mb-2" id="post-modelo" placeholder="Modelo">
            <input type="text" class="form-control mb-2" id="post-marca" placeholder="Marca">
            <button class="btn btn-success" onclick="testarPOST()">Enviar</button>
            <pre class="bg-light mt-3 p-2"><code id="res-post"></code></pre>
          </div>
        </div>
      </div>

      <!-- PUT -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">✏️ PUT - Atualizar Carro</h5>
            <input type="number" class="form-control mb-2" id="put-id" placeholder="ID">
            <input type="text" class="form-control mb-2" id="put-modelo" placeholder="Modelo">
            <input type="text" class="form-control mb-2" id="put-marca" placeholder="Marca">
            <button class="btn btn-warning" onclick="testarPUT()">Atualizar</button>
            <pre class="bg-light mt-3 p-2"><code id="res-put"></code></pre>
          </div>
        </div>
      </div>

      <!-- DELETE -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">🗑️ DELETE - Remover Carro</h5>
            <input type="number" class="form-control mb-2" id="delete-id" placeholder="ID">
            <button class="btn btn-danger" onclick="testarDELETE()">Remover</button>
            <pre class="bg-light mt-3 p-2"><code id="res-delete"></code></pre>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-dark text-white text-center py-4">
    <p>Feito com ❤️ para fins educacionais | Desenvolvido por Pablo Garcia</p>
    <small>Contato: pablorobertodev@gmail.com</small>
  </footer>

  <script>
    const api = 'https://api-professores-main-2dg03s.laravel.cloud/api/carros';

    function testarGET() {
      fetch(api)
        .then(res => res.json())
        .then(data => document.getElementById('res-get').innerText = JSON.stringify(data, null, 2))
        .catch(err => console.error(err));
    }

    function testarPOST() {
      const modelo = document.getElementById('post-modelo').value;
      const marca = document.getElementById('post-marca').value;

      fetch(api, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ modelo, marca })
      })
        .then(res => res.json())
        .then(data => document.getElementById('res-post').innerText = JSON.stringify(data, null, 2))
        .catch(err => console.error(err));
    }

    function testarPUT() {
      const id = document.getElementById('put-id').value;
      const modelo = document.getElementById('put-modelo').value;
      const marca = document.getElementById('put-marca').value;

      fetch(`${api}/${id}`, {
        method: 'PUT',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ modelo, marca })
      })
        .then(res => res.json())
        .then(data => document.getElementById('res-put').innerText = JSON.stringify(data, null, 2))
        .catch(err => console.error(err));
    }

    function testarDELETE() {
      const id = document.getElementById('delete-id').value;

      fetch(`${api}/${id}`, {
        method: 'DELETE'
      })
        .then(res => res.json())
        .then(data => document.getElementById('res-delete').innerText = JSON.stringify(data, null, 2))
        .catch(err => console.error(err));
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
