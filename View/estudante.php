<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Estudante</title>
</head>
<body>
<div>
    <?php
    include "header.php";
    ?>
  </div> 
<div id="estudante">
        
        <form action="../Controller/estudanteController.php" method="post" class="card"  style="width: 40%">
        <div class="card-header">
        <h2>Formulário de Cadastro</h2>
        <div class="cart-content row mt-5">
            <div class=" cart-content-area col-11 m-2">
                <label for="nome">Nome:</label>
                <input class="form-control border border-dark" type="text" id="nome" name="nome" required>
            </div>
            <div class=" cart-content-area col-11 m-2">
                <label for="cpf">CPF:</label>
                <input class="form-control border border-dark" type="text" id="cpf" name="cpf" required>
            </div>
            <div class=" cart-content-area col-11 m-2">
                <label for="email">Email:</label>
                <input class="form-control border border-dark" type="text" id="email" name="email" required>
            </div>
            <div class=" cart-content-area col-11 m-2">
                <label for="telefone">Telefone:</label>
                <input class="form-control border border-dark"type="tel" id="telefone" name="telefone" required>
            </div>
            <div class=" cart-content-area col-11 m-2">
                <label for="inst">Instituição de Ensino:</label>
                <input class="form-control border border-dark" type="text" id="inst" name="inst" required>
            </div>
            <div class=" cart-content-area col-11 m-2">
                <label for="senha">Senha:</label>
                <input class="form-control border border-dark" type="password" id="senha" name="senha" required>  
            </div>
        </div>
        <div class= "card-footer">
            <button type="submit" values="login" name="login" class="submit">Cadastrar</button>
        </div>
    </form>
</div>
</div>
</body>
</html>