<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])

  <title>Document</title>
</head>
<body>
      @include('layout.navbar')
    <div class="container">
      <a type="link" class="btn btn-primary" href="/categorias/create">Criar Categoria</a>
      <h1>Lista de Categorias:</h1>
      @foreach ($categorias as $categoria)
        <div>
          <h2>{{ $categoria->nome }}</h2>
          <p>Máximo de Horas: {{ $categoria->maximo_horas }}</p>
        </div>
      @endforeach
    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>