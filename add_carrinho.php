<?php
//BANCO DE DADOS
require_once 'db_connect.php';
require_once 'produtos.php';
//SESSÃO
session_start();

if(isset($_GET['101'])):
    $preco_td = $_GET['101'] * $frutas[0]['preco'];
    $qtd = $_GET['101'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Abacate', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif;
if(isset($_GET['102'])):

endif; 
if(isset($_GET['103'])):

endif; 
if(isset($_GET['104'])):

endif; 
if(isset($_GET['105'])):

endif; 
if(isset($_GET['106'])):

endif; 
if(isset($_GET['107'])):

endif; 
if(isset($_GET['108'])):

endif; 
if(isset($_GET['109'])):

endif; 
if(isset($_GET['110'])):

endif; 
if(isset($_GET['111'])):

endif; 
if(isset($_GET['112'])):

endif; 
if(isset($_GET['113'])):

endif; 
if(isset($_GET['114'])):

endif; 
if(isset($_GET['115'])):

endif; 
if(isset($_GET['116'])):

endif; 
if(isset($_GET['117'])):

endif; 
if(isset($_GET['118'])):

endif; 
if(isset($_GET['119'])):

endif; 
if(isset($_GET['120'])):

endif;
