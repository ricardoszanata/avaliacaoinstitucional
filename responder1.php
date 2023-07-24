<?php
session_start();
include_once './conexao.php';
include_once './verificaacesso.php';
$_SESSION['autenticado'];
$query = "select alucurid,ac.modid,ac.aluid,m.curid,moddescricao,curnome,alunome from alunocurso as ac inner join moduloseries as m on ac.modid = m.modid inner join cursos as c on m.curid = c.curid inner join alunos as a on ac.aluid = a.aluid where ac.aluid = '{$_SESSION['autenticado']}'";
$result = mysqli_query($conect, $query);
$row = mysqli_num_rows($result);
if ($row == 1) {
    $ln = mysqli_fetch_assoc($result);
//    echo $ln['aluid'];
//    echo $ln['alunome'];
//    echo $ln['modid'];
//    echo $ln['moddescricao'];
//    echo $ln['curid'];
//    echo $ln['curnome'];
}
$queryprof = "select procurid, pc.modid, pc.proid, moddescricao, pronome from professorcurso as pc inner join moduloseries as ms on pc.modid = ms.modid inner join professores as p on pc.proid = p.proid where pc.modid = '{$ln['modid']}'";
$resultprof = mysqli_query($conect, $queryprof);
$rowprof = mysqli_num_rows($resultprof);
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
                <h4><label>Seja Bem Vindo ao SAIP <?php echo utf8_encode($ln['alunome']); ?></label></h4>
            </div>
            <!--bloco de professores-->
            <div class="row">
                <?php
                while ($lnp = mysqli_fetch_array($resultprof)) {
                    ?>
                    <div class="radio" id="radio">
                        <label> -|- <input type="radio" id="<?php echo $lnp['modid']; ?>" name="<?php echo $lnp['modid']; ?>" value="<?php echo $lnp['proid']; ?>" onclick="carregaPro(<?php echo $ln['aluid'] ?>,<?php echo $lnp['modid']; ?>, this.value)"> <?php echo $lnp['pronome'] ?> -|- </label>
                    </div>
                <?php } ?>
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
                                            <label><input type="radio" id="<?php echo utf8_encode($lista['perid']); ?>" name="<?php echo utf8_encode($lista['perid']); ?>" value="1" onclick="carregaPer(<?php echo utf8_encode($lista['perid']); ?>, this.value)">1|</label>
                                            <label><input type="radio" id="<?php echo utf8_encode($lista['perid']); ?>" name="<?php echo utf8_encode($lista['perid']); ?>" value="2" onclick="carregaPer(<?php echo utf8_encode($lista['perid']); ?>, this.value)">2|</label>
                                            <label><input type="radio" id="<?php echo utf8_encode($lista['perid']); ?>" name="<?php echo utf8_encode($lista['perid']); ?>" value="3" onclick="carregaPer(<?php echo utf8_encode($lista['perid']); ?>, this.value)">3|</label>
                                            <label><input type="radio" id="<?php echo utf8_encode($lista['perid']); ?>" name="<?php echo utf8_encode($lista['perid']); ?>" value="4" onclick="carregaPer(<?php echo utf8_encode($lista['perid']); ?>, this.value)">4|</label>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>  
                        </tbody>
                    </table>
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
