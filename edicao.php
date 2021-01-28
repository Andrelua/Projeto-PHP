<?php
//BANCO DE DADOS
require_once 'db_connect.php';
require_once 'produtos.php';

$id_prod = $_GET['edt'];

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

            <form method="POST" class='search'>
                <input type="search" id=busca name="pesquisar" placeholder="Buscar produto...">
                <button class="btn waves-effect waves-light" type="submit" name="btn-pesquisar" title="buscar"><i class="material-icons left">search</i></button>
            </form>
        </header>        
    </div>
    <div class="barra">
        <strong>Editando produto</strong>
    </div>
    <div>
            <?php
                session_start();
                $id = $_SESSION['id_pedido'];
                $consulta = "SELECT * FROM produto WHERE id_pedido = '$id'";
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
                    while($dados=mysqli_fetch_array($resultado)){
                        if($dados["id_produto"] == $id_prod){
                    ?>

                        <tr>
                        
                            <td style="text-align: center;">
                                <form method="POST">
                                    <input type="number" name="edt" value="0" min="0">
                                    <button class="waves-effect waves-light btn" name="btn-edit"><i class="material-icons left">edit</i>Editar</button>
                                </form>
                            </td>
                            <td style="text-align: center;"><?php echo $dados["preco_produto"];?></td>
                            <td style="text-align: center;"><?php echo $dados["nome_produto"];?></td>
                            <td><a href="delete.php?del=<?php echo $dados["id_produto"];?>" class="waves-effect waves-light btn disabled"><i class="material-icons">delete</i></a></td>
                            <td><a href="edicao.php?edt=<?php echo $dados["id_produto"];?>" class="waves-effect waves-light btn disabled"><i class="material-icons">edit</i></a></td>
                        
                        </tr>
                    <?php
                        if(isset($_POST["btn-edit"])):
                            $value = $dados["nome_produto"];
                            $sql = "SELECT preco_pesquisa FROM pesquisa WHERE nome_pesquisa = '$value'";
                            $resultado = mysqli_query($connect, $sql);
                            $dados4 = mysqli_fetch_array($resultado);
                            
                            $valor_edt = $_POST['edt'];
                            $preco_edt = $valor_edt * $dados4['preco_pesquisa'];
                            
                            $edt = "UPDATE produto SET qtd_produto = '$valor_edt', preco_produto = '$preco_edt' WHERE id_produto = '$id_prod'";
                            $editar = mysqli_query($connect, $edt);
                            
                            header('Location: carrinho.php');
                        endif;
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>        
</body>
</html>