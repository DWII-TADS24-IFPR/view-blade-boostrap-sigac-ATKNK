<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    
    <div class="container">
      @include('layout.navbar')
    </div>
    
    <div class="container">
      
        <h1>Criando aluno:</h1>

        <form action="{{ route('aluno.store') }}" method="POST">
            @csrf

<div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" name="cpf" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">ID do Usuário:</label>
            <input type="number" name="user_id" class="form-control">
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">ID do Curso:</label>
            <input type="number" name="curso_id" class="form-control">
        </div>

        <div class="mb-3">
            <label for="turma_id" class="form-label">ID da Turma:</label>
            <input type="number" name="turma_id" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>

    </div>
        <div class="container">
      @include('layout.footer')
    </div>
</body>
</html>