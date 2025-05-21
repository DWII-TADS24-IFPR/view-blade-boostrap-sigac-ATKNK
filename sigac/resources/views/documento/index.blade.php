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
      <a type="link" class="btn btn-primary" href="/documentos/create">Criar Documentos</a>
      <h1>Lista de Documentos:</h1>
      @foreach ($documentos as $documento)
        <div>
          <h2>{{ $documento->url }}</h2>
          <p>Descrição: {{ $documento->descricao }}</p>
          <p>Horas de Entrada: {{ $documento->horas_in }}</p>
          <p>Horas de Saída: {{ $documento->horas_out }}</p>
          <p>Comentario: {{ $documento->comentario}}</p>
          <p>Categoria: {{ $documento->categoria->nome }}</p>
        </div>
      @endforeach
    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>