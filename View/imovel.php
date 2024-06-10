<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Imovel</title>
</head>
<body>
<div>
    <?php
    include "header.php";
    ?>
  </div> 
<div id="formImovel">
    <form action="../Controller/imovelController.php" method="post" class="card" style="width: 30%;">
            <div class="card-header">
                <h2>Formulário de Cadastro</h2>
         
            <div class=" cart-content row mt-5">

                <div class="form-check  cart-content-area col-10 m-3">
                    <input type="radio" name="tipo" class="tipo" value="casa" required> Casa
                    <input type="radio" name="tipo" class="tipo" value="apt" required> Apartamento
                </div>
                <div class=" cart-content-area col-10 m-3" >
                    <label for="valor">Valor:</label>
                    <input class="form-control" type="number" id="valor" name="valor" required>
                </div>
                <div class=" cart-content-area col-10 m-3">
                    <select name="contrato" class="form-select" id="">
                        <option value="mensal">Mensal</option>
                        <option value="semestral">Semestral</option>
                        <option value="anual">Anual</option>
                    </select>
                </div>
                <div class=" cart-content-area col-10 m-3">
                    <label for="descriao">Descrição do Imovel</label>
                    <textarea name="descricao" class="form-control" id="" required></textarea>
                </div>
                <div class=" cart-content-area col-10 m-3" >
                    <label for="cidade">Cidade</label>
                    <input class="form-control" type="text" name="cidade" class="cidade" required>
                </div>
                <div class=" cart-content-area col-10 m-3">
                    <label for="estado">Estado</label>
                    <input class="form-control" type="text" name="estado" class="estado" required>
                </div>
                <div class=" cart-content-area col-10 m-3">
                    <label for="rua">Rua</label>
                    <input class="form-control"type="text" name="rua" class="rua" required>
                </div>
                <div class=" cart-content-area col-10 m-3">
                    <label for="numero">Numero</label>
                    <input class="form-control" type="number" name="numero" class="numero" required>
                </div>
                <div class=" cart-content-area col-10 m-3">
                    <label for="complemento">Complemento</label>
                    <input class="form-control" type="text" name="complemento" class="complemento" required>
                </div>
                <div class=" cart-content-area col-10 m-3">
                    <label for="bairro">Bairro</label>
                    <input class="form-control" type="text" name="bairro" class="bairro" required>
                </div>
                <div class=" cart-content-area col-10 m-3">
                    <label for="cep">Cep</label>
                    <input class="form-control" type="text" name="cep" class="cep" required>
                </div>
                <div class="card-footer">
                    <input type="submit" class="submit">
                </div>
                </div>
                </div>


        </form>
    </div>
</body>
</html>