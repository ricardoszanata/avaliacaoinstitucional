<?php

include_once './conexao.php';
$aluid = $_GET["aluid"];
$modid = $_GET["modid"];
$proid = $_GET["proid"];
$perid = $_GET["perid"];
$resnota = $_GET["resnota"];
$select = "select resid from respostas where aluid =$aluid and modid =$modid and proid =$proid and perid = $perid";
$consulta = mysqli_query($conect, $select)or die(mysql_error());
$contar = mysqli_num_rows($consulta);
While ($lista = mysqli_fetch_assoc($consulta)) {
    $resid = $lista["resid"];
}
$insert = "insert into respostas(resano, aluid, modid, proid, perid, resnota)values(year(now()), '$aluid', '$modid', '$proid', '$perid', '$resnota');";
$update = "update respostas set resnota=$resnota where resid = $resid;";
if ($contar == 1) {
//aqui faz o update
    mysqli_query($conect, $update)or die(mysql_error());
    if ($update == true) {
        echo "ALTERADO COM SUCESSO";
    }
} else {
//aqui faz o insert
    mysqli_query($conect, $insert)or die(mysql_error());
    if ($inserir == true) {
        echo "INSERIDO COM SUCESSO";
    }
}


//include_once './conexao.php';
//$aluid= $_POST["aluid"];
//$modid = $_POST["modid"];
//$proid = $_POST["proid"];
//$perid = $_POST["perid"];
//$resnota = $_POST["resnota"];
//$query = "insert into respostas(resano, aluid, modid, proid, perid, resnota)values(year(now()), '$aluid', '$modid', '$proid', '$perid', '$resnota')";
//$result = mysqli_query($conect, $query);
//$row = mysqli_num_rows($result);
//if ($row == 1) {
//    $_SESSION['gravado'] = true;
//    exit();
//} else {
//    $_SESSION['naogravado'] = true;
//    exit();
//}
?>
