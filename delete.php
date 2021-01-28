<?php
//BANCO DE DADOS
require_once 'db_connect.php';

$id_prod = $_GET['del'];
$del = "DELETE FROM produto WHERE id_produto = '$id_prod'";
$apagar = mysqli_query($connect, $del);

header('Location: carrinho.php')
?>