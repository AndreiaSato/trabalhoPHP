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
<div class="main">
        <h2>Formulário de Cadastro</h2>
        <form action="addImovel.php" method="post">
        <input type="radio" name="tipo" class="tipo" value="casa" required> Casa
        <input type="radio" name="tipo" class="tipo" value="apt" required> Apartamento
        <label for="valor">Valor:</label>
        <input class="form-control" type="number" id="valor" name="valor" required>
        <select name="contrato" id="">
            <option value="mensal">Mensal</option>
            <option value="semestral">Semestral</option>
            <option value="anual">Anual</option>
        </select>
        <label for="descriao">Descrição do Imovel</label>
        <textarea name="descricao" id=""></textarea>
        <label for="cidade">Cidade</label>
        <input class="form-control" type="text" name="cidade" class="cidade" required>
        <label for="estado">Estado</label>
        <input class="form-control" type="text" name="estado" class="estado" required>
        <label for="rua">Rua</label>
        <input class="form-control"type="text" name="rua" class="rua" required>
        <label for="numero">Numero</label>
        <input class="form-control" type="number" name="numero" class="numero" required>
        <label for="complemento">Complemento</label>
        <input class="form-control" type="text" name="complemento" class="complemento" required>
        <label for="bairro">Bairro</label>
        <input class="form-control" type="text" name="bairro" class="bairro" required>
        <label for="cep">Cep</label>
        <input class="form-control" type="text" name="cep" class="cep" required>

        <input type="submit">

        </form>
    </div>
</body>
</html>