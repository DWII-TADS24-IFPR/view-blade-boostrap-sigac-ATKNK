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

        <h1>Criando Curso:</h1>

        <form action="{{ route('curso.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="sigla" class="form-label">Sigla:</label>
                <input type="text" name="sigla" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="total_horas" class="form-label">Total de Horas:</label>
                <input type="text" name="total_horas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nivel_id" class="form-label">Nível:</label>
                <select name="nivel_id" class="form-select" required>
                    <option value="">Selecione um nível</option>
                    @foreach ($niveis as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nome }}</option>
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
