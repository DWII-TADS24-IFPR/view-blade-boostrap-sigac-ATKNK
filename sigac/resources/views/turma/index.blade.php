<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])

  <title>Turmas</title>
</head>
<body>
      @include('layout.navbar')
    <div class="container">
      <a type="link" class="btn btn-primary" href="/turmas/create">Criar Turma</a>
      <h1>Lista de Turmas:</h1>
      @foreach ($turmas as $turma)
        <div>
          <h2>{{$turma->curso->nome ?? 'Curso não definido'}} - {{ $turma->ano }}</h2>
        </div>
      @endforeach
    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>