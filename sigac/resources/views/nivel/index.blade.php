<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])

  <title>SIGAC</title>
</head>
<body>
      @include('layout.navbar')
    <div class="container">
      <a type="link" class="btn btn-primary" href="/niveis/create">Criar Nivel</a>
      <h1>Lista de Níveis:</h1>
      @foreach ($niveis as $nivel)
        <div>
          <h2>{{ $nivel->nome }}</h2>
        </div>
        
        <a type="link" class="btn btn-primary" href="/niveis/{{ $nivel->id }}/edit">Editar</a>
      @endforeach
    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>