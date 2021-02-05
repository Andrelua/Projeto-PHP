<?php
//BANCO DE DADOS
require_once 'db_connect.php';
//SESSÃO
session_start();

if (isset($_POST["btn-finalizar"])):
    header('Location: fnz_pdd.php');
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
        .sistema {
            text-align: center;
            width: 100%;
            padding: 15px 10px;
        }
        .sistema input[type="email"]{
            width: 20%;
        }
        .sistema input[type="password"]{
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
        <strong>Produtos</strong>
    </div>
    <div>
        <?php
            $id_pdd = $_GET['pdd'];
            $consulta = "SELECT * FROM produto_fz WHERE id_pedido = '$id_pdd'";
            $resultado = mysqli_query($connect, $consulta);
        ?>
        <div>
            <table class="striped">
                <thead>
                    <tr>
                        <th style="text-align: center;">Quantidade</th>
                        <th style="text-align: center;">Valor</th>
                        <th style="text-align: center;">Nome do produto</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $valortot = 0;
                        while($dados=mysqli_fetch_array($resultado)){
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $dados["qtd_produto"];?></td>
                        <td style="text-align: center;">R$<?php echo $dados["preco_produto"];?></td>
                        <td style="text-align: center;"><?php echo $dados["nome_produto"];?></td>
                    </tr>
                    <?php 
                        $valortot += $dados["preco_produto"];
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div style="width: 100%; font-family: 'Roboto', sans-serif;">
            <div class="card-panel teal lighten-2" style="width: 40%; float: right; text-align: center;">
                <?php echo "O VALOR TOTAL PAGO FOI: <strong>R$ $valortot</strong>";?>       
            </div>
        </div>
    </div>
</body>