<?php
include 'conectaBanco.php';
session_start();
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
echo $sql;
$banco->query($sql);

if($banco->affected_rows >= 1){
    echo "<p> Reservado com sucesso!</p>";
}

$banco->close();

?>