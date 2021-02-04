<?php
//BANCO DE DADOS
require_once 'db_connect.php';
//SESSÃO
session_start();

$id = $_SESSION['id_pedido'];

$sql = "INSERT INTO pedido_fz SELECT * FROM pedidos WHERE id_pedido = '$id'";
$result = mysqli_query($connect, $sql);

$sql2 = "INSERT INTO produto_fz SELECT * FROM produto WHERE id_pedido = '$id'";
$result2 = mysqli_query($connect, $sql2);

$del = "DELETE FROM produto WHERE id_pedido = '$id'";
$result3 = mysqli_query($connect, $del);

$del2 = "DELETE FROM pedidos WHERE id_pedido = '$id'";
$result4 = mysqli_query($connect, $del2);


header('Location: dados_entrega.php');
?>