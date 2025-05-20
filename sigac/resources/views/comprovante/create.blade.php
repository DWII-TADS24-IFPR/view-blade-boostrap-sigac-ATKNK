<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGAC</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body>

    @include('layout.navbar')

    <div class="container">

        <h1>Criando comprovante:</h1>

        <form action="{{ route('comprovante.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="horas" class="form-label">Horas:</label>
                <input type="text" name="horas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="atividade" class="form-label">Atividade:</label>
                <input type="text" name="atividade" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoria:</label>
                <select name="categoria_id" class="form-select" required>
                    <option value="">Selecione uma categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="aluno_id" class="form-label">Aluno:</label>
                <select name="aluno_id" class="form-select" required>
                    <option value="">Selecione um aluno</option>
                    @foreach ($alunos as $aluno)
                        <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
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
