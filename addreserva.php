<?php
include 'conectaBanco.php';
session_start();
if(isset($_SESSION['cpf'])){
$data_inicial = new DateTime($_POST ['data']);
$idimovel = $_POST ['id'];
$contrato = $_POST ['contrato'];
$estudante_id = $_SESSION['cpf'];
$data_final = new DateTime($_POST ['data']);

if($contrato == 'mensal'){
    $data_final->modify('+1 month');
    
}
else if ($contrato == 'semestral'){
    $data_final->modify('+6 month');

}
else{
    $data_final->modify('+12 month');
}
$data_inicial = $data_inicial->format('Y-m-d');
$data_final =  $data_final->format('Y-m-d');
$sql = "INSERT INTO reserva (data_inicial, data_final, situacao, estudante_id, imovel_id)
VALUES ('$data_inicial','$data_final', 'true', '$estudante_id', '$idimovel')";

$banco->query($sql);

$sql2 = "UPDATE imovel SET situacao = 'indisponivel' WHERE id = '$idimovel'";

$banco->query($sql2);

if($banco->affected_rows >= 1){
    echo "<h1 class='card-header'><p> Reservado com sucesso!</p></h1>";
}

$banco->close();

}
else{
    header("location:login.php");
}
?>