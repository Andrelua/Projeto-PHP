<?php
// Essa página registra os dados para o envio dos produtos.

//BANCO DE DADOS
require_once 'db_connect.php';
//SESSÃO
session_start();

if (isset($_POST["btn-dados"])):
    $erros = array();
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $form = mysqli_escape_string($connect, $_POST['forma']);
    
    if(empty($nome) or empty($endereco) or empty($form)):
        $erros[] = "<div class='alerta'>Erro no Envio - Algum campo deve estar vazio.</div>";
    else:
        $id_cliente = $_SESSION['id_cliente'];
        $id_pedido = $_SESSION['id_pedido'];
        $sql = "INSERT INTO envio (nome_cliente, endereco, forma_pag, data_envio, id_cliente, id_pedido) VALUES ('$nome', '$endereco', '$form', NOW(), '$id_cliente', '$id_pedido')";
        if(mysqli_query($connect, $sql)):
            header('Location: new_pedido.php');
        else:
            header('Location: index.php');
        endif;
    endif;
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>OrgStore - A melhor loja orgânica da região</title>

    <style>
        .alerta{
            background-color: red;
            font-size: large;
        }
        .sistema {
            text-align: center;
            width: 100%;
            padding: 15px 10px;
        }
        .sistema input[type="text"]{
            width: 20%;
        }
        .search {
            float: right;
        }
        .search button {
            float: right;
        }
        .barra {
            background-color: #ee6e73;
            text-align: center;
            padding: 20px 10px;
            font-size: xx-large;
            color: #fff;
            width: 100%;
        }
        .box {
            width: 100%;
        }
        .box div{
            width: 50%;
            float: right;
        }
    </style>

</head>
<body>
    <div class="card-panel teal lighten-2">
        <header>
            <h1>
                <img src="logo.png" alt="OrgStore">
            </h1>
            <a href="index.php" class="waves-effect waves-light btn"><i class="material-icons left">home</i>Home</a>
        </header>        
    </div>
    <div class="barra">
        <strong>Dados de entrega</strong>
    </div>
    <div class="sistema">
        <?php 
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
        ?>
        <form method="POST">

            Nome Completo <input type="text" name="nome"> <br>
            Endereço (Rua/Bairro/Cidade/Número)
            <input type="text" name="endereco"> <br>
            Forma de pagamento: 
                        <p>
                            <label>
                                <input name="forma" type="radio" value="Crédito"/>
                                    <span>Crédito</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="forma" type="radio" value="Débito"/>
                                    <span>Débito</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="forma" type="radio" value="Dinheiro"/>
                                    <span>Dinheiro</span>
                            </label>
                        </p>
            <button class="btn waves-effect waves-light" type="submit" name="btn-dados">Enviar
                <i class="material-icons right">done</i>
            </button>            
        </form>
    </div>
    
    
</body>