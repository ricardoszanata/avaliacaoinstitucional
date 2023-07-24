<?php
include_once './conexao.php';
$querypro = "select * from professores;";
$resultpro = mysqli_query($conect, $querypro);
$rowpro = mysqli_num_rows($resultpro);
//$listapro = mysqli_fetch_assoc($resultpro);
//echo 'professor - ' . $listapro['pronome'];

$querymod = "select * from moduloseries;";
$resultmod = mysqli_query($conect, $querymod);
$rowmod = mysqli_num_rows($resultmod);

//echo 'modulo - ' . $listamod['moddescricao'];
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
            <form method="" action="">
                <div class="form-control">
                    <input type="submit" class="btn btn-outline-info" value="ENVIAR">
                </div>
            </form>
            <div class="row">
                <div class="col-md-5">
                    <h4>TURMAS</h4>
                    <?php while ($listamod = mysqli_fetch_assoc($resultmod)) { ?>
                        <div class="radio" id="radio">
                            <label><input type="radio" id="<?php echo utf8_encode($listamod['modid']); ?>" name="1" value="<?php echo utf8_encode($listamod['modid']); ?>" onclick="carregaMod(this.value)"><?php echo utf8_encode($listamod['moddescricao']); ?></label>
                        </div>                         
                    <?php } ?>
                </div>
                <div class="col-md-7">
                    <h4>PROFESSORES</h4>
                    <?php while ($listapro = mysqli_fetch_assoc($resultpro)) { ?>
                        <div class="check" id="check">
                            <label><input type="checkbox" id="<?php echo utf8_encode($listapro['proid']); ?>" name="" value="<?php echo utf8_encode($listapro['proid']); ?>" onclick="carregaProTurma(this.value)"><?php echo utf8_encode($listapro['pronome']); ?></label>
                        </div>                         
                    <?php } ?>
                </div>
            </div>
            <footer class="row">
                <?php
                include_once './source/foother.php';
                ?>
            </footer>
        </div>
    </body>
</html>
