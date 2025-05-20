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
      <h1>Lista de Declarações:</h1>
      @foreach ($declaracoes as $declaracao)
        <div>
          <h2>{{ $declaracao->hash }}</h2>
          <p>Data: {{ $declaracao->data }}</p>
          <p>Aluno: {{ $declaracao->aluno->nome }}</p>
          <p>Comprovante: {{ $declaracao->comprovante->atividade }}</p>
        </div>
      @endforeach
    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>