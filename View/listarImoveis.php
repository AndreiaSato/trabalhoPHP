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
<div>
    <?php
    include "header.php";
    ?>
  </div> 
 <div class="container">
 <?php
  include '../Dao/conectaBanco.php'; // conectar com o banco

   $sql = "SELECT * FROM imovel WHERE situacao = 'disponivel' "; //procura todos os imoveis disponiveis
   $conn = conectaBanco::getConnection()->prepare($sql);
   $conn->execute();


   
        while($userdata = $conn->fetch(PDO::FETCH_ASSOC)){ // laço de repetição para exibir todos os imoveis disponiveis no banco
          if(isset($userdata)){

            echo " <div class='imoveis' >
    
            <dt > <h2>Identificação da reserva:</h2></dt>
            <dd >$userdata[id]</dd>
          
            <dt >Contrato atual:</dt>
            <dd >
              <p>$userdata[contrato]</p>
            </dd>
          
            <dt >Tipo de moradia: </dt>
            <dd ><p>$userdata[tipo]</p></dd>
          
            <dt class=' text-truncate'>Descrição do Imóvel</dt>
            <dd ><p>$userdata[descricao]</p></dd>
          
            <dt >Valor do aluguel:</dt>
                <dd ><p>$userdata[valor]</p></dd>
          </dl>";
          echo "<a class='botao' href='reserva.php?idimovel=$userdata[id]&contrato=$userdata[contrato]'>Alugar</a>";
          echo "</div>"; //link direciona para a pagina de reserva
        }
          }
    
  ?>
 </div>
 

</body>
</html>


