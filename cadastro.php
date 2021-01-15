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
            
            <a href="carrinho.php" class="waves-effect waves-light btn"><i class="material-icons left">shopping_cart</i>Meu carrinho</a>
            <a href="index.php" class="waves-effect waves-light btn"><i class="material-icons left">home</i>Home</a>
        
        </header>        
    </div>
    <div class="barra">
        <strong>Cadastro</strong>
    </div>
    <div class="sistema">
        <form method="POST">
            Email: <input type="email" name="email_cadastro"> <br>
            Senha: <input type="password" name="senha_cadastro"> <br>
            <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                <i class="material-icons right">done</i>
            </button> <br>
        </form>
    </div>
</body>
</html>