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
        <a type="link" class="btn btn-primary" href="/alunos/index">Aluno</a>
        <a type="link" class="btn btn-primary" href="/categorias/index">Categoria</a>
        <a type="link" class="btn btn-primary" href="/comprovantes/index">Comprovante</a>
        <a type="link" class="btn btn-primary" href="/cursos/index">Curso</a>
        <a type="link" class="btn btn-primary" href="/declaracoes/index">Declaração</a>
        <a type="link" class="btn btn-primary" href="/documentos/index">Documento</a>
        <a type="link" class="btn btn-primary" href="/niveis/index">Nível</a>
        <a type="link" class="btn btn-primary" href="/turmas/index">Turma</a>
    </div>
    @include('layout.footer')
</body>

</html>
