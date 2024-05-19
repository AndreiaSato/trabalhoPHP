<?php
$idimovel = $_GET['idimovel'];
$contrato = $_GET['contrato'];
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reserva</title>
</head>
<body>
    <form action="addreserva.php" method="post">
        <div>
            <input  type="hidden" name="id" value="<?php echo $idimovel; ?>"> 
            <input type="hidden" name="contrato" value="<?php echo $contrato; ?>">
            <input class="form-control" type="date" name="data" id="">
            <input type="submit">
        </div>
    </form>
</body>
</html>