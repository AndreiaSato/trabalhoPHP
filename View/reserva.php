<?php
$idimovel = $_GET['idimovel'];
$contrato = $_GET['contrato'];
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>reserva</title>
</head>
<body>
<div>
    <?php
    include "header.php";
    ?>
  </div> 
<div class="reserva card">
    <form action="../Controller/reservaController.php" method="post">
        <div class="card-header">

            <input  type="hidden" name="id" value="<?php echo $idimovel; ?>"> 
            <input type="hidden" name="contrato" value="<?php echo $contrato; ?>">

            <div class=" cart-content-area col-10 m-3">
                <input class="form-control" type="date" name="data" id="">
            </div>

            <div>
                <input class="botao" type="submit">
            </div>
        </div>
    </form>
</div>
</body>

</html>