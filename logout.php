<?php
session_start();
unset($_SESSION ['cpf']);
unset($_SESSION ['nome']);
unset($_SESSION ['email']);
unset($_SESSION['senha']);
unset($_SESSION ['telefone']);
unset($_SESSION ['instituicao_ensino']);

header("Location: index.php");
?>