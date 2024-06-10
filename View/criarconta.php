<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Imagens e Botão Submit</title>
    <style>
        
        .image-container {
            width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
<div>
    <?php
    include "header.php";
    ?>
</div> 
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-3">
            <div class="image-container">
                <a href="estudante.php"><img class="image-container" src="../imagens/estudante.png" title="estudante"  action="estudante.php" class="border border-dark"></a>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3">
            <div class="image-container">
                <a href="proprietario.php"><img class="image-container" src="../imagens/proprietario.png" title="proprietario" action="proprietario.php" class= "border border-dark"></a>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

    <!DOCTYPE html>
<html>

<!-- <head>
    <meta charset="UTF-8">
    <title>Desafio Card</title>
    <style>
        .curso{
            display: inline-block;
            vertical-align: top;
            border: solid  1px #CCC;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.3);
            font-family: Arial, Helvetica, sans-serif;
            height: 250px;
            width: 260px;
            margin: 5px 20px;
            padding: 5px;;
        }
        .curso img{
            max-height: 50%;
            width: 100%;
        }
        .curso h4{
            font-size: 1.4em;
            font-weight: 100;
            margin: 0px;
        }
        .curso p {
            font-size: small;
        }
        .curso-info{
            overflow: hidden;
            height: 90px;
        }
        .curso-preco{
            float: right;
            padding: 10px;
        }
        .preco-de{
            font-size: small;
            color: red;
            text-decoration: line-through;
        }
        .preco-por{
            color: green;
            font-weight: bold;
            font-size: 1.4em;
        }
    </style>
</head> -->

<!-- <body>
    <h1>Card</h1>

    <h2>Objetivo</h2>
    <img src="http://files.cod3r.com.br/curso-web/card.png" height="200" alt="Objetivo">

    <h2>Resultado</h2>
    <div>
        <div class="curso">
            <img src="http://files.cod3r.com.br/curso-web/curso1.jpg" />
            <div class="curso-info">
                <h4>Docker: Ferramenta essencial para Desenvolvedores</h4>
                <p>Prof. Fulano</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
        <div class="curso">
            <img src="http://files.cod3r.com.br/curso-web/curso2.jpg" />
            <div class="curso-info">
                <h4>Web Moderno com Javascript + Projetos</h4>
                <p>Prof. Sicrano Filho</p>
            </div>
            <div class="curso-preco">
                <span class="preco-de">R$80,00</span>
                <span class="preco-por">R$50,00</span>
            </div>
        </div>
    </div>
</body> -->

</html>

</body>
</html>
