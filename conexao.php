<?php

define('url', 'localhost');
define('user', 'root');
define('pass', '');
define('db', 'avaliacao');
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$conect = mysqli_connect(url, user, pass, db)or die('Não foi possivel conectar');