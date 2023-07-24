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
        <div class="container">
            <form method="POST" action="gravaaluno.php">
                <div class="form-group">
                    <label class="form">Nome:</label>
                    <input type="text" id="alunome" name="alunome" class="form-control" placeholder="Digite seu nome completo">
                    <label class="form">E-mail:</label>
                    <input type="text" id="aluemail" name="aluemail" class="form-control" placeholder="Digite seu e-mail institucional">
                    <label class="form">Senha:</label>
                    <input type="password" id="alusenha" name="alusenha" class="form-control"placeholder="Digite sua senha">
                    <p></p>
                    
                    <input type="submit" class="form btn btn-success" id="gravar" name="gravar" value="GRAVAR" >
                </div>        
            </form>
        </div>
    </body>
</html>