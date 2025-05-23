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
        <a type="link" class="btn btn-primary" href="/alunos/create">Criar Aluno</a>
        
        <h1>Lista de Alunos:</h1>

        @foreach ($alunos as $aluno)
            <div>
                <h2>{{ $aluno->nome }}</h2>
                <p>CPF: {{ $aluno->cpf }}</p>
                <p>Email: {{ $aluno->email }}</p>
                <p>Curso: {{ $aluno->curso->nome }}</p>
                <p>Turma: {{ $aluno->turma->ano }}</p>
                <a type="link" class="btn btn-primary" href="/alunos/{{ $aluno->id }}/edit">Editar</a>
            </div>
        @endforeach
        
    </div>
    <div class="container">
        @include('layout.footer')
    </div>
</body>

</html>
