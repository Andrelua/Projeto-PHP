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
            
            <a href="carrinho.php" class="waves-effect waves-light btn"><i class="material-icons left">shopping_cart</i>Meu carrinho</a>
            <a href="login.php" class="waves-effect waves-light btn"><i class="material-icons left">send</i>Entrar</a>
            
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

        <div class="col s5 produto">
            <div>
                <img src="frutas/abacate.jpg" alt="abacate" width="100px" height="60px">
            </div>
            O valor do abacate é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>
        
        <div class="col s5 produto">
            <div>
                <img src="frutas/banana.png" alt="banana" width="100px" height="60px">
            </div>
            O valor do banana é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
            <div>
                <img src="frutas/laranja.png" alt="laranja" width="100px" height="60px">
            </div>
            O valor do laranja é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
            <div>
                <img src="frutas/pera.png" alt="pêra" width="100px" height="60px">
            </div>
            O valor do pêra é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
            <div>    
                <img src="frutas/maca.png" alt="maçã" width="100px" height="60px">
            </div>
            O valor do maçã é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

    </div>

    <a name="verduras"></a>
    <div class="row">
        <h2>Verduras/Legumes</h2>
        
        <div class="col s5 produto">
            <div>
                <img src="verduras/cenoura.jpg" alt="cenoura" width="100px" height="60px">
            </div>
            O valor do cenoura é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>
        
        <div class="col s5 produto">
            <div>
                <img src="verduras/chuchu.png" alt="chuchu" width="100px" height="60px">
            </div>
            O valor do chuchu é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
            <div>
                <img src="verduras/pepino.png" alt="pepino" width="100px" height="60px">
            </div>
            O valor do pepino é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
            <div>
                <img src="verduras/quiabo.png" alt="quiabo" width="100px" height="60px">
            </div>
            O valor do quiabo é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
            <div>
                <img src="verduras/tomate.png" alt="tomate" width="100px" height="60px">
            </div>
            O valor do tomate é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

    </div>
    <a name="folhas"></a>
    <div class="row">
        <h2>Folhagem</h2>
        
        <div class="col s5 produto">
            <div>
                <img src="folhagem/alface.png" alt="alface" width="100px" height="60px">
            </div>
            O valor do alface é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>
        
        <div class="col s5 produto">
        <div>
                <img src="folhagem/brocolis.png" alt="brocolis" width="100px" height="60px">
            </div>
            O valor do brócolis é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
        <div>
                <img src="folhagem/cebolinho.jpg" alt="cebolinho" width="100px" height="60px">
            </div>
            O valor do cebolinho é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
        <div>
                <img src="folhagem/espinafre.jpg" alt="espinafre" width="100px" height="60px">
            </div>
            O valor do espinafre é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
        <div>
                <img src="folhagem/hortela.jpg" alt="hortela" width="100px" height="60px">
            </div>
            O valor do hortelã é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>
    </div>
    <a name="raizes"></a>
    <div class="row">
        <h2>Raizes/Tubérculos</h2>
        
        <div class="col s5 produto">
            <div>
                <img src="raizes/batata-doce.jpg" alt="batata_doce" width="100px" height="60px">
            </div>
            O valor do Batata-doce é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>        
        </div>
        
        <div class="col s5 produto">
            <div>
                <img src="raizes/batata-inglesa.png" alt="batata_inglesa" width="100px" height="60px">
            </div>
            O valor do batata-inglêsa é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>        
        </div>

        <div class="col s5 produto">
        <div>
                <img src="raizes/macaxeira-descasca.jpg" alt="macaxeira_descascada" width="100px" height="60px">
            </div>
            O valor do macaxeira descascada é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>        
        </div>

        <div class="col s5 produto">
            <div>
                <img src="raizes/macaxeira.jpg" alt="macaxeira" width="100px" height="60px">
            </div>
            O valor do macaxeira é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>

        <div class="col s5 produto">
            <div>
                <img src="raizes/nabo.jpg" alt="nabo" width="100px" height="60px">
            </div>
            O valor do nabo é: R$ 1.50 und.
            <br>
            <form method="GET" action="carrinho.php">
                Quantidade: <input type="number" name="qtd_produto">
                <button class="btn waves-effect waves-light" type="submit" name="action">Add ao carrinho
                    <i class="material-icons right">shopping_cart</i>
                </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>