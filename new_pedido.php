<?php
//BANCO DE DADOS
require_once 'db_connect.php';
//SESSÃO
session_start();

$id_usuario = $_SESSION['id_cliente'];

$id += rand(2, 999999);
$sql = "SELECT * FROM pedidos WHERE numero_pedido = 1";
$resultado = mysqli_query($connect, $sql);

if(mysqli_num_rows($resultado) == 0):
    $sql = "INSERT INTO pedidos (numero_pedido, id_cliente) VALUES ('$id', '$id_usuario')";
    $resultado1 = mysqli_query($connect, $sql);
    $consulta = "SELECT * FROM pedidos WHERE numero_pedido = '$id' AND id_cliente = $id_usuario";
    $result_1 = mysqli_query($connect, $consulta);
    $dados_pedidos = mysqli_fetch_array($result_1);
    if($resultado1):
        $_SESSION['id_pedido'] = $dados_pedidos['id_pedido'];
        header('Location: index.php');
    endif;
endif;
?>