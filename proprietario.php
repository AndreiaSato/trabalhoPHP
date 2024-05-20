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
<div class="main">
    <div class="txt center">
        <h2>Formulário de Cadastro</h2>
    </div>
        <form class="row gx-3 gy-2 align-items-center" action="addproprietario.php" method="post">
         
                <div class="row mb-3">
                    <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                </div>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="nome" name="nome" required>
                </div>
            
                <div class="row mb-3">
                    <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
                </div>
                <div class="col-sm-10">
                    <input class="form-control"type="text" id="cpf" name="cpf" required>
                </div>
           
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                </div>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="email" name="email" required>
                </div>
        
                <div class="row mb-3">
                    <label for="telefone" class="col-sm-2 col-form-label">Telefone:</label>
                </div>
                <div class="col-sm-10">
                    <input class="form-control" type="tel" id="telefone" name="telefone" required>
                </div>
            
                <div class="row mb-3">
                    <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
                </div>
                <div class="col-sm-10">
                    <input class="form-control" type="password" id="senha" name="senha" required>
                </div>

            <div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>