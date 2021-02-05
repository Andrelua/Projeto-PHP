<?php
//Essa página tem a função de sair da conta e deletar o pedido não finalizado.

//Iniciando a SESSÃO
session_start();
//BANCO DE DADOS
require_once 'db_connect.php';

$id_pd = $_SESSION['id_pedido'];
$del = "DELETE FROM produto WHERE id_pedido = '$id_pd'";
$apagar = mysqli_query($connect, $del);

$del2 = "DELETE FROM pedidos WHERE id_pedido = '$id_pd'";
$apagar2 = mysqli_query($connect, $del2);

session_unset();
session_destroy();
header('Location: index.php');
?>