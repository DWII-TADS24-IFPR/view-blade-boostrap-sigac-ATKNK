<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])

  <title>Cursos</title>
</head>
<body>
      @include('layout.navbar')
    <div class="container">
      <a type="link" class="btn btn-primary" href="/cursos/create">Criar Curso</a>
      <h1>Lista de Cursos:</h1>
      @foreach ($cursos as $curso)
        <div>
          <h2>{{ $curso->nome }}</h2>
          <p>Sigla: {{ $curso->sigla }}</p>
          <p>Total de Horas: {{ $curso->total_horas }}</p>
          <p>Nível: {{ $curso->nivel->nome ?? 'Nível não definido'}}</p>
        </div>
      @endforeach
    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>