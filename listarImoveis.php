<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Listar imoveis</title>
</head>
<body>
 <div class="container">
 <?php
  include 'conectaBanco.php'; // conectar com o banco
    $sql = "SELECT * FROM imovel WHERE situacao = 'disponivel' "; //procura todos os imoveis disponiveis
    $busca = $banco->query($sql);

    if ($busca->num_rows == 0){
        echo 'Nenhum resultado encontrado!'; 
    }
    else{
        while($userdata = $busca->fetch_assoc()){ // laço de repetição para exibir todos os imoveis disponiveis no banco
            echo $userdata['id'].'<br>';
            echo $userdata['contrato'].'<br>';
            echo $userdata['tipo'].'<br>';
            echo $userdata['descricao'].'<br>';
            echo $userdata['valor'].'<br>';
            echo "<a href='reserva.php?idimovel=$userdata[id]&contrato=$userdata[contrato]'>Alugar</a>"; //link direciona para a pagina de reserva
        }
    }
  ?>
 </div>
    
</body>
</html>


