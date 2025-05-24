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
        <h2>Editando categoria: {{ $categoria->nome }}</h2>
    </div>

    @include('layout.footer')
</body>

</html>