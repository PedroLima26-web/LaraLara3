<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Formulario UaU</title>
</head>
<body>
    <h1>Produtos</h1>
<form action="/cadastrar-produto" method="POST">
    @csrf
    <label for="lblNome">nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">
    <br><br>
    <label for="lblValor">valor:</label>
    <input type="text" name="valor" value="{{ $produto->valor }}">
    <br><br>
    <label for="lblQuantidade">quantidade:</label>
    <input type="text" name="estoque" value="{{ $produto->estoque }}">
    <br><br>
    


</form>
</body>
</html>