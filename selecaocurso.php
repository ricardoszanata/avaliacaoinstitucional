<?php
session_start();
include_once './conexao.php';
$querymod = "select * from moduloseries;";
$resultmod = mysqli_query($conect, $querymod);
$rowmod = mysqli_num_rows($resultmod);
//echo $_SESSION['cadastrado'];
$query = "select * from alunos where aluid = '{$_SESSION['cadastrado']}';";
$result = mysqli_query($conect, $query);
//$rowalu = mysqli_num_rows($result);
while ($lista = mysqli_fetch_assoc($result)) {
    $aluid = $lista['aluid'];
    $alunome = utf8_encode($lista['alunome']);
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <link rel = "shortcut icon" href = "./img/favicon.ico" type = "image/x-icon"/>
        <link rel = "stylesheet" href = "./css/bootstrap.css" type = "text/css" media = "screen,projection"/>
        <link rel = "stylesheet" href = "./css/font-awesome.css" type = "text/css" media = "screen,projection"/>
        <script language = "javascript" src = "./js/jquery-3.3.1.js"></script>
        <script language="javascript" src="./js/bootstrap.js"></script>
        <script language="javascript" src="./js/ajax.js"></script>
<!--<script language="javascript" src="./js/instrucao.js"></script>-->
        <title>Avaliação Interna</title>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <?php
                include_once './source/header.php';
                ?>
            </header>
            <form method="" action="index.php">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <label><?php
                            echo $alunome;
                            echo' ';
                            ?>Por Favor Selecione os Cursos que Frequenta.</label>
                        <?php while ($listamod = mysqli_fetch_assoc($resultmod)) { ?>
                            <div class="check" id="check">
                                <label><input type="checkbox" id="<?php echo utf8_encode($listamod['modid']); ?>" name="<?php echo utf8_encode($listamod['modid']); ?>" value="<?php echo utf8_encode($listamod['modid']); ?>" onclick="carregaAlu(this.value,<?php echo $_SESSION['cadastrado']; ?>)"><?php echo utf8_encode($listamod['moddescricao']); ?></label>
                            </div>                         
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="btn btn-success" value="FINALIZAR" />
                </div>
            </form>
        </div>
    </body>
</html>