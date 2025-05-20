<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    
      @include('layout.navbar')
    
    <div class="container">
      
        <h1>Criando categoria:</h1>

        <form action="{{ route('categoria.store') }}" method="POST">
            @csrf

<div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="maximo_horas" class="form-label">Máximo de Horas:</label>
            <input type="text" name="maximo_horas" class="form-control" required>
        </div>

            <div class="mb-3">
                <label for="curso_id" class="form-label">Curso:</label>
                <select name="curso_id" class="form-select" required>
                    <option value="">Selecione um curso</option>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                    @endforeach
                </select>
            </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>

    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>