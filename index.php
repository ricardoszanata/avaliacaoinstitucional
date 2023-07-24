<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="./css/bootstrap.css" type="text/css" media="screen,projection"/>
        <link rel="stylesheet" href="./css/font-awesome.css" type="text/css" media="screen,projection"/>
        <script language="javascript" src="./js/jquery-3.3.1.js"></script>
        <script language="javascript" src="./js/bootstrap.js"></script>
<!--        <script language="javascript" src="./js/ajax.js"></script>
        <script language="javascript" src="./js/instrucao.js"></script>-->
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
                <div class="container">
                    <div class="row main">
                        <div id="conteudo_mostrar" role="main" class="col-md-4">
                            <!--espaçamento-->
                        </div>
                        <div id="conteudo_mostrar" role="main" class="col-md-4">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <?php
                                    if (isset($_SESSION['naoautenticado'])):
                                        ?>
                                        <div class="alert-danger">
                                            <p>ERRO: Usuário ou senha inválidos.</p>
                                        </div>
                                        <?php
                                        unset($_SESSION['naoautenticado']);
                                    endif;
                                    ?>
                                    <h1 class="title">ACESSO</h1>
                                    <hr />
                                </div>
                            </div> 
                            <div class="main-login main-center">
                                <form class="form-horizontal" method="post" action="login.php">
                                    <div class="form-group">
                                        <label for="aluemail" class="cols-sm-2 control-label">Usuário</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="aluemail" id="aluemail"  placeholder="ENTRE COM SEU USUÁRIO"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alusenha" class="cols-sm-2 control-label">Senha</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="alusenha" id="alusenha"  placeholder="ENTRE COM A SUA SENHA"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Acessar" id="entrar" name="entrar"><br>
                                    </div>
                                    <div class="login-register">
                                        <a href="aluno.php">Novo Usuário</a>
                                        <br>
                                        <!--<a href="recuperasenha.php">Recuperar Senha</a>-->
                                </form>
                            </div>
                        </div>
                        <div id="conteudo_mostrar" role="main" class="col-md-4">
                            <!--espaçamento-->
                        </div>
                    </div>
                </div>
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
