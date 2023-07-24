<?php
session_start();
include_once 'conexao.php';

$alunome = strtoupper(filter_input(INPUT_POST, 'alunome'));
$aluemail = strtolower(filter_input(INPUT_POST, 'aluemail'));
$alusenha = strtolower(filter_input(INPUT_POST, 'alusenha'));
$alurecupera = 'DATE_FORMAT(now(), "%d%m%Y%d%m")';
$insert = "insert into alunos(alunome, aluemail, alusenha, alurecupera, aluativo)values('$alunome', '$aluemail', MD5('$alusenha'),(select DATE_FORMAT(now(), '%d%m%Y%H%i%s')), '1')";
$select = "select last_insert_id() as aluid from alunos;";


$inserir = mysqli_query($conect, $insert)or die(mysql_error());
if ($inserir == true) {
    $resultid = mysqli_query($conect, $select)or die(mysql_error());
    while ($listaid = mysqli_fetch_assoc($resultid)) {
        $aluid = utf8_encode($listaid['aluid']);
        
        //header('Location: index.php');
    }
    //echo $aluid;
    $_SESSION['cadastrado'] = $aluid;
    header('Location: selecaocurso.php');
}