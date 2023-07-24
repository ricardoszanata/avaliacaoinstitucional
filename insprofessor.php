<?php

include_once './conexao.php';

$pronome = $_POST['pronome'];
$insprofessor = "insert into professores(pronome)values('$pronome');";
