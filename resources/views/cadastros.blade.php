<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>{{$cad}}</h1>
    <ul>
        @forelse ($user as $cad)
            <li>{{$cad}}</li>
        @empty
            <li>Não há cidade cadastrada</li>
        @endforelse
    </ul>
</body>
</html>
