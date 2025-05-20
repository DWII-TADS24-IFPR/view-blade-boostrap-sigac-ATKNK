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

        <h1>Criando documento:</h1>

        <form action="{{ route('documento.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="url" class="form-label">URL:</label>
                <input type="text" name="url" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="horas_in" class="form-label">Horas de Entrada:</label>
                <input type="text" name="horas_in" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <input type="text" name="status" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label">Comentário:</label>
                <input type="text" name="comentario" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="horas_out" class="form-label">Horas de Saída:</label>
                <input type="text" name="horas_out" class="form-control" required>
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

            <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>

    </div>
    <div class="container">
        @include('layout.footer')
    </div>
</body>

</html>
