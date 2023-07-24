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
                    <form method="POST" action="email.php" >
                        <div class="form-group">
                            <label>Digite seu E-mail:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <input type="submit" class="btn btn-danger" id="recuperar" name="recuperar" value="RECUPERAR">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>