<?php
session_start();
include_once "../Dao/reservaDao.php";
include_once "../Model/Reserva.php";


$reservaDao = new reservaDao();
$reserva = new Reserva();

if(isset($_POST['submit'])){
    $reserva->setDataInicial($_POST['data']);
    $reserva->setEstudante($_SESSION['cpf']);
    $reserva->setImovel($_POST['id']);
    $contrato = $_POST ['contrato'];
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

    $data_final =  $data_final->format('Y-m-d');
    $reserva->setDataFinal($data_final);

    $reservaDao->inserir($reserva);
    header ('location:../View/index.php');
}


?>

