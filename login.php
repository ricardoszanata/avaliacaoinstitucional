<?php

session_start();
include_once './conexao.php';
if (empty($_POST['aluemail']) || empty($_POST['alusenha'])) {
    header('Location: index.php');
    exit();
}
$aluemail = mysqli_real_escape_string($conect, $_POST['aluemail']);
$alusenha = mysqli_real_escape_string($conect, $_POST['alusenha']);
$query = "select * from alunos  where aluemail = '$aluemail' and alusenha = md5('$alusenha')";
$result = mysqli_query($conect, $query);
$row = mysqli_num_rows($result);
if ($row == 1) {
    $ln = mysqli_fetch_assoc($result);
    $_SESSION['autenticado'] = $ln['aluid'];
    header('Location: perfil.php');
    exit();
} else {
    $_SESSION['naoautenticado'] = true;
    header('Location: index.php');
    exit();
}