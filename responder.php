<?php
session_start();
include_once './conexao.php';
include_once './verificaacesso.php';
$_SESSION['autenticado'];
$aluid = $_GET['aluid'];
$modid = $_GET['modid'];
$proid = $_GET['proid'];

$queryprof = "select * from professores where proid = '{$proid}'";
$resultprof = mysqli_query($conect, $queryprof);
$rowprof = mysqli_num_rows($resultprof);
$listapro = mysqli_fetch_assoc($resultprof);
$listapro['pronome'];
$result_perguntas = "select * from perguntas where perativo = 1";
$resultado_perguntas = mysqli_query($conect, $result_perguntas);
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
            <div class="row">
                <h4><label>Você está avaliando o Professor(a) <?php echo $listapro['pronome']; ?></label></h4>
            </div>
            <!--bloco de professores-->
            <div class="row">

            </div>
            <!--bloco de perguntas-->
            <div class="container-fluid" >
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nº</th>
                                <th scope="col">Pergunta</th>
                                <th scope="col">Resposta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($lista = mysqli_fetch_assoc($resultado_perguntas)) { ?>
                                <tr>
                                    <td>
                                        <?php echo utf8_encode($lista['perid']); ?>
                                    </td>
                                    <td><?php echo utf8_encode($lista['perdescricao']); ?></td>
                                    <td>
                                        <div class="radio" id="radio">
                                            <label><input type="radio" id="<?php echo utf8_encode($lista['perid']); ?>" name="<?php echo utf8_encode($lista['perid']); ?>" value="1" onclick="carregaPer(<?php echo $aluid ?>,<?php echo $modid ?>,<?php echo $proid ?>,<?php echo utf8_encode($lista['perid']); ?>, this.value)">1|</label>
                                            <label><input type="radio" id="<?php echo utf8_encode($lista['perid']); ?>" name="<?php echo utf8_encode($lista['perid']); ?>" value="2" onclick="carregaPer(<?php echo $aluid ?>,<?php echo $modid ?>,<?php echo $proid ?>,<?php echo utf8_encode($lista['perid']); ?>, this.value)">2|</label>
                                            <label><input type="radio" id="<?php echo utf8_encode($lista['perid']); ?>" name="<?php echo utf8_encode($lista['perid']); ?>" value="3" onclick="carregaPer(<?php echo $aluid ?>,<?php echo $modid ?>,<?php echo $proid ?>,<?php echo utf8_encode($lista['perid']); ?>, this.value)">3|</label>
                                            <label><input type="radio" id="<?php echo utf8_encode($lista['perid']); ?>" name="<?php echo utf8_encode($lista['perid']); ?>" value="4" onclick="carregaPer(<?php echo $aluid ?>,<?php echo $modid ?>,<?php echo $proid ?>,<?php echo utf8_encode($lista['perid']); ?>, this.value)">4|</label>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>  
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <input type="button" class="btn btn-success" onclick="window.close()" value="FINALIZAR" />
            </div>
            <footer class="row">
                <?php
                include_once './source/foother.php';
                ?>
            </footer>
        </div>
    </body>
</html>
