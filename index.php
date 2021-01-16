<?php
//BANCO DE DADOS
require_once 'db_connect.php';
//SESSÃO
session_start();

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM cliente WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
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
        .search {
            float: right;
        }
        .search button {
            float: right;
        }
        .produto {
            width: 100%;
            float: left;
        }
        .produto form{
            width: 50%;
            float: left;
        }
        .produto input[type="search"] {
            width: 30%;
            float: left;
        }
        .produto button {
            width: 70%;
            float: right;
            font-size: 12px;
        }
    </style>

</head>

<body>
    <div class="card-panel teal lighten-2">
        <header>
            <h1>
                <img src="logo.png" alt="OrgStore">
            </h1>
            <!---->
            <?php
                if(!isset($_SESSION['logado'])):
            ?>
                <a href="carrinho.php" class="waves-effect waves-light btn"><i class="material-icons left">shopping_cart</i>Meu carrinho</a>

            <?php
                else:
            ?>
                <a href="carrinho.php" class="waves-effect waves-light btn disable"><i class="material-icons left">shopping_cart</i>Meu carrinho</a>
            <?php
                endif;
            ?>
            <a href="login.php" class="waves-effect waves-light btn"><i class="material-icons left">send</i>Entrar</a>
            <!---->
            <?php
                if(isset($_SESSION['logado'])):
            ?>
                <a href="logout.php" class="waves-effect waves-light btn"><i class="material-icons left">exit_to_app</i>Sair</a>
            <?php
                else:
            ?>
                <a href="logout.php" class="waves-effect waves-light btn disable"><i class="material-icons left">exit_to_app</i>Sair</a>
            <?php
                endif;
            ?>
            <!---->
            <form method="POST" class='search'>
                <input type="search" id=busca name="pesquisar" placeholder="Buscar produto...">
                <button class="btn waves-effect waves-light" type="submit" name="btn-pesquisar" title="buscar"><i class="material-icons left">search</i></button>
            </form>
        </header>
    </div>
    <div>
        <nav>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="#frutas">Frutas</a></li>
                <li><a href="#verduras">Verduras/Legumes</a></li>
                <li><a href="#folhas">Folhagem</a></li>
                <li><a href="#raizes">Raizes/Tubérculos</a></li>
            </ul>
        </nav>
    </div>
    
    <a name="frutas"></a>

    <div class="row">
        <h2>Frutas</h2>
        <?php
            include("produtos.php");
            for ($i = 0; $i <= 4; $i++):
        ?>
            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $frutas[$i]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do <?php echo $frutas[$i]["nome"];?> é R$<?php echo $frutas[$i]["preco"];?> <?php echo $frutas[$i]["tipo"];?></p>
                <form method="GET" action="carrinho.php">
                    Quantidade: <input type="number" name="qtd_produto" min="0">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                        <i class="material-icons right">shopping_cart</i>
                    </button>
                </form>
            </div>
        <?php
            endfor;
        ?>
    </div>

    <a name="verduras"></a>
    <div class="row">
        <h2>Verduras/Legumes</h2>
        <?php
            include("produtos.php");
            for ($i = 0; $i <= 4; $i++):
        ?>
            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $verduras[$i]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do <?php echo $verduras[$i]["nome"];?> é R$<?php echo $verduras[$i]["preco"];?> <?php echo $verduras[$i]["tipo"];?></p>
                <form method="GET" action="carrinho.php">
                    Quantidade: <input type="number" name="qtd_produto" min="0">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                        <i class="material-icons right">shopping_cart</i>
                    </button>
                </form>
            </div>
        <?php
            endfor;
        ?>
    </div>

    </div>
    <a name="folhas"></a>
    <div class="row">
        <h2>Folhagem</h2>
        <?php
            include("produtos.php");
            for ($i = 0; $i <= 4; $i++):
        ?>
            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $folhas[$i]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do <?php echo $folhas[$i]["nome"];?> é R$<?php echo $folhas[$i]["preco"];?> <?php echo $folhas[$i]["tipo"];?></p>
                <form method="GET" action="carrinho.php">
                    Quantidade: <input type="number" name="qtd_produto" min="0">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                        <i class="material-icons right">shopping_cart</i>
                    </button>
                </form>
            </div>
        <?php
            endfor;
        ?>
    </div>

    <a name="raizes"></a>
    <div class="row">
        <h2>Raizes/Tubérculos</h2>
        <?php
            include("produtos.php");
            for ($i = 0; $i <= 4; $i++):
        ?>
            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $raizes[$i]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do <?php echo $raizes[$i]["nome"];?> é R$<?php echo $raizes[$i]["preco"];?> <?php echo $raizes[$i]["tipo"];?></p>
                <form method="GET" action="carrinho.php">
                    Quantidade: <input type="number" name="qtd_produto" min="0" step="0.5">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                        <i class="material-icons right">shopping_cart</i>
                    </button>
                </form>
            </div>
        <?php
            endfor;
        ?>
        </div>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>