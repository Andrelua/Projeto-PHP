<?php
// Sessão
session_start();
//Conexão com o db
require_once "db_connect.php";

if (isset($_POST["btn-cadastrar"])):
    $erros = array();
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email_cadastro']);
    $senha = mysqli_escape_string($connect, $_POST['senha_cadastro']);
    
    if(empty($nome) or empty($email) or empty($senha)):
        $erros[] = "<div>Erro no cadastro - Algum campo deve estar vazio.</div>";
    else:
        $sql = "SELECT email FROM cliente WHERE email = '$email'";
        $resultado = mysqli_query($connect, $sql);
        if (mysqli_num_rows($resultado) >= 1):
            $erros[] = "<div>Erro no cadastro - Esse email já está cadastrado.</div>";
        else:
            $senha = md5($senha);
            $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            if(mysqli_query($connect, $sql)):
                header('Location: login.php');
            else:
                header('Location: cadastro.php');
            endif;
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
        .sistema input[type="text"]{
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
            
            <a href="login.php" class="waves-effect waves-light btn"><i class="material-icons left">keyboard_tab</i>Login</a>
            <a href="index.php" class="waves-effect waves-light btn"><i class="material-icons left">home</i>Home</a>
        
        </header>        
    </div>
    <div class="barra">
        <strong>Cadastro</strong>
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
            Nome: <input type="text" name="nome"> <br>
            Email: <input type="email" name="email_cadastro"> <br>
            Senha: <input type="password" name="senha_cadastro"> <br>
            <button class="btn waves-effect waves-light" type="submit" name="btn-cadastrar">Cadastrar
                <i class="material-icons right">done</i>
            </button> <br>
        </form>
    </div>
</body>
</html>
