<?php

include_once './conexao.php';

$modid = filter_input(INPUT_GET, 'modid');
$aluid = filter_input(INPUT_GET, 'aluid');

$query="insert into alunocurso(modid,aluid)values($modid,$aluid);";
$result= mysqli_query($conect, $query);

?>