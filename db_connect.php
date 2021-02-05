<?php
//Conexão com o banco de dados.

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "feiraorg";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()):
    echo "Falha de conexão: ". mysqli_connect_error();
endif;