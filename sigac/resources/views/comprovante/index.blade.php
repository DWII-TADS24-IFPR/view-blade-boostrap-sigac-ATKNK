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
      <a type="link" class="btn btn-primary" href="/comprovantes/create">Criar Comprovante</a>
      <h1>Lista de Comprovantes:</h1>
      @foreach ($comprovantes as $comprovante)
        <div>
          <h2>{{ $comprovante->aluno->nome }} - {{ $comprovante->atividade }}</h2>
          <p>Horas: {{ $comprovante->horas }}</p>
          <p>Categoria: {{ $comprovante->categoria->nome }}</p>
        </div>
      @endforeach
    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>