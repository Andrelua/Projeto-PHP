<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Lembrar de criar a tabela no banco de dados 'produto' e criar uma conexão
        com o pedido. Com os campos: id_produto, nome_produto, preco_produto, qtd_produto e id_pedido.-->
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
            <?php
                session_start();
                $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                if (!$_SESSION['logado']):
            ?>
                <a href="login.php" class="waves-effect waves-light btn"><i class="material-icons left">send</i>Entrar</a>
                <a href="carrinho.php" class="waves-effect waves-light btn disabled"><i class="material-icons left">shopping_cart</i>Meu carrinho</a>
                <a href="pedidos.php" class="waves-effect waves-light btn disabled"><i class="material-icons left">reorder</i>Meus pedidos</a>
                <a href="logout.php" class="waves-effect waves-light btn disabled"><i class="material-icons left">exit_to_app</i>Sair</a>

                <form method="POST" class='search'action="search.php">
                    <input type="search" id=busca name="pesquisar" placeholder="Buscar produto...">
                    <button class="btn waves-effect waves-light disabled" type="submit" name="btn-pesquisar" title="buscar"><i class="material-icons left">search</i></button>
                </form>
            <?php
                else:
            ?>
                <a href="login.php" class="waves-effect waves-light btn disabled"><i class="material-icons left">send</i>Entrar</a>
                <a href="carrinho.php" class="waves-effect waves-light btn"><i class="material-icons left">shopping_cart</i>Meu carrinho</a>
                <a href="pedidos.php" class="waves-effect waves-light btn"><i class="material-icons left">reorder</i>Meus pedidos</a>
                <a href="logout.php" class="waves-effect waves-light btn"><i class="material-icons left">exit_to_app</i>Sair</a>

                <form method="POST" class='search'action="search.php">
                    <input type="search" id=busca name="pesquisar" placeholder="Buscar produto...">
                    <button class="btn waves-effect waves-light" type="submit" name="btn-pesquisar" title="buscar"><i class="material-icons left">search</i></button>
                </form>
            <?php
                endif;
            ?> 
            
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
        ?>
            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $frutas[0]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $frutas[0]["nome"];?> é R$<?php echo $frutas[0]["preco"];?> <?php echo $frutas[0]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="101" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">Add ao carrinho
                        <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif; 
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $frutas[1]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $frutas[1]["nome"];?> é R$<?php echo $frutas[1]["preco"];?> <?php echo $frutas[1]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="102" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif; 
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $frutas[2]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $frutas[2]["nome"];?> é R$<?php echo $frutas[2]["preco"];?> <?php echo $frutas[2]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="103" value="0" min="0"
            step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif; 
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $frutas[3]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $frutas[3]["nome"];?> é R$<?php echo $frutas[3]["preco"];?> <?php echo $frutas[3]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="104" value="0" min="0"
            step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif; 
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $frutas[4]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $frutas[4]["nome"];?> é R$<?php echo $frutas[4]["preco"];?> <?php echo $frutas[4]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="110" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif; 
                    ?>
                </form>
            </div>
    </div>

    <a name="verduras"></a>
    <div class="row">
        <h2>Verduras/Legumes</h2>
        <?php
            include("produtos.php");
        ?>
            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $verduras[0]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $verduras[0]["nome"];?> é R$<?php echo $verduras[0]["preco"];?> <?php echo $verduras[0]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="116" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $verduras[1]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $verduras[1]["nome"];?> é R$<?php echo $verduras[1]["preco"];?> <?php echo $verduras[1]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="117" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $verduras[2]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $verduras[2]["nome"];?> é R$<?php echo $verduras[2]["preco"];?> <?php echo $verduras[2]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="118" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $verduras[3]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $verduras[3]["nome"];?> é R$<?php echo $verduras[3]["preco"];?> <?php echo $verduras[3]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="119" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $verduras[4]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $verduras[4]["nome"];?> é R$<?php echo $verduras[4]["preco"];?> <?php echo $verduras[4]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="120" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>
    </div>

    </div>
    <a name="folhas"></a>
    <div class="row">
        <h2>Folhagem</h2>
        <?php
            include("produtos.php");
        ?>
            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $folhas[0]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $folhas[0]["nome"];?> é R$<?php echo $folhas[0]["preco"];?> <?php echo $folhas[0]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="111" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $folhas[1]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $folhas[1]["nome"];?> é R$<?php echo $folhas[1]["preco"];?> <?php echo $folhas[1]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="112" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $folhas[2]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $folhas[2]["nome"];?> é R$<?php echo $folhas[2]["preco"];?> <?php echo $folhas[2]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="113" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $folhas[3]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $folhas[3]["nome"];?> é R$<?php echo $folhas[3]["preco"];?> <?php echo $folhas[3]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="114" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $folhas[4]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $folhas[4]["nome"];?> é R$<?php echo $folhas[4]["preco"];?> <?php echo $folhas[4]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="115" value="0" min="0" step="1">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                        Add ao carrinho <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>
    </div>

    <a name="raizes"></a>
    <div class="row">
        <h2>Raizes/Tubérculos</h2>
        <?php
            include("produtos.php");
        ?>
            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $raizes[0]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $raizes[0]["nome"];?> é R$<?php echo $raizes[0]["preco"];?> <?php echo $raizes[0]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="111" value="0" min="0" step="0.5">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $raizes[1]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $raizes[1]["nome"];?> é R$<?php echo $raizes[1]["preco"];?> <?php echo $raizes[1]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="112" value="0" min="0" step="0.5">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $raizes[2]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $raizes[2]["nome"];?> é R$<?php echo $raizes[2]["preco"];?> <?php echo $raizes[2]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="113" value="0" min="0" step="0.5">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $raizes[3]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $raizes[3]["nome"];?> é R$<?php echo $raizes[3]["preco"];?> <?php echo $raizes[3]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="114" value="0" min="0" step="0.5">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>

            <div class="col s5 produto">
                <div>
                    <img src="<?php echo $raizes[4]["imagem"];?>" width="100px" height="60px">
                </div>
                <p>O valor do(a) <?php echo $raizes[4]["nome"];?> é R$<?php echo $raizes[4]["preco"];?> <?php echo $raizes[4]["tipo"];?></p>
                <form method="GET" action="add_carrinho.php">
                    Quantidade: <input type="number" name="115" value="0" min="0" step="0.5">
                    <?php
                        $_SESSION['logado'] = $_SESSION['logado'] ?? False;
                        if (!$_SESSION['logado']):
                    ?>
                        <button class="btn waves-effect waves-light disabled" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        else:
                    ?>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php
                        endif;
                    ?>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>