<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    @if (session('sucesso'))
        <p class="sucesso"> {{ session('sucesso') }} </p>
    @endif
    <a href="/produtos/create">Novo Produto</a>

    @foreach ($produtos as $produto)
        <div class="produto">
            <p>{{ $produto->id }}</p>
            <p>{{ $produto->nome }}</p>
            <p>R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
            <p>{{ $produto->created_at->format('d/m/Y H:i') }}</p>
        </div>
    @endforeach

</body>
</html>