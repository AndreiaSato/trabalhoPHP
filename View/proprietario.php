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
<div>
    <?php
    include "header.php";
    ?>
  </div> 
<div class="proprietario">
    <form class="card" action="../Controller/proprietarioController.php" method="post" style="width:45%">
           <div class="card-header">
                <h2>Formulário de Cadastro</h2>
                <div class=" cart-content row mt-5" >
                    <div class=" cart-content-area col-10 m-3">
                        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                        <input class="form-control border border-dark" type="text" id="nome" name="nome" required>
                    </div>
                    
                    <div class=" cart-content-area col-10 m-3">
                        <label for="cpf" >CPF:</label>
                        <input class="form-control border border-dark" type="text" id="cpf" name="cpf" required>
                    </div>
                    
                    <div class=" cart-content-area col-10 m-3">
                        <label for="email" >Email:</label>
                        <input class="form-control border border-dark"  type="text" id="email" name="email" required>
                    </div>
                    
                    <div class=" cart-content-area col-10 m-3">
                        <label for="telefone" >Telefone:</label>
                        <input class="form-control border border-dark"  type="tel" id="telefone" name="telefone" required>
                    </div>
                    
                    <div class=" cart-content-area col-10 m-3">
                        <label for="senha" >Senha:</label>
                        <input class="form-control border border-dark"  type="password" id="senha" name="senha" required>
                    </div>
                    
                </div>

            <div class="card-footer">
                <button type="submit" class="submit" values="login">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>