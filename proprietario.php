<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Proprietário</title>
</head>
<body>
<div class="main">
        <h2>Formulário de Cadastro</h2>
        <form action="addproprietario.php" method="post">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" id="nome" name="nome" required>
            <label for="cpf">CPF:</label>
            <input class="form-control"type="text" id="cpf" name="cpf" required>
            <label for="email">Email:</label>
            <input class="form-control" type="text" id="email" name="email" required>
            <label for="telefone">Telefone:</label>
            <input class="form-control" type="tel" id="telefone" name="telefone" required>
            <label for="senha">Senha:</label>
            <input class="form-control" type="password" id="senha" name="senha" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>