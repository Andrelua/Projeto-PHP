<?php
//BANCO DE DADOS
require_once 'db_connect.php';
//SESSÃO
session_start();

if (isset($_POST["btn-login"])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['email_login']);
    $senha = mysqli_escape_string($connect, $_POST['senha_login']);

    if(empty($login) or empty($senha)):
        $erros[] = "<div>Erro no login - Algum campo deve estar vazio.</div>";
    else:
        $sql = "SELECT email FROM cliente WHERE email = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql = "SELECT * FROM cliente WHERE email = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: index.php');
            else:
                $erros[] = "<div>Erro no login - Usuário e senha não conferem.</div>";
            endif;
        else:
            $erros[] = "<div>Erro no login - Usuário inexistente.</div>";
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
        .sistema div{
            background-color: red;
            font-size: large;
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
        <strong>Login</strong>
    </div>
    <div class="sistema">
        <?php 
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
        ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            Email: <input type="email" name="email_login"> <br>
            Senha: <input type="password" name="senha_login"> <br>
            <button class="btn waves-effect waves-light" type="submit" name="btn-login">Entrar
                <i class="material-icons right">done</i>
            </button> <br>
            <br>
            <a href="cadastro.php" class="waves-effect waves-light btn"><i class="material-icons right">system_update_alt</i>Cadastrar-se</a>
        </form>
    </div>
</body>
</html>