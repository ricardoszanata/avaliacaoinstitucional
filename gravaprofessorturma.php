<?php

include_once './conexao.php';
$modid = $_GET["modid"];
$proid = $_GET["proid"];
$select = "select procurid from professorcurso where modid =$modid and proid =$proid";
$consulta = mysqli_query($conect, $select)or die(mysql_error());
$contar = mysqli_num_rows($consulta);
While ($lista = mysqli_fetch_assoc($consulta)) {
    $procurid = $lista["procurid"];
}
$insert = "insert into professorcurso(modid, proid)values('$modid', '$proid');";
$update = "update professorcurso
 set proid='$proid' where procurid = $procurid;";
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