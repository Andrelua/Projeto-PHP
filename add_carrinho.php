<?php
// Essa página está responsável por adicionar os produtos no carrinho (direto no banco).

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
    $preco_td = $_GET['102'] * $frutas[1]['preco'];
    $qtd = $_GET['102'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Banana', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['103'])):
    $preco_td = $_GET['103'] * $frutas[2]['preco'];
    $qtd = $_GET['103'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Laranja', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['104'])):
    $preco_td = $_GET['104'] * $frutas[3]['preco'];
    $qtd = $_GET['104'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Maçã', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['105'])):
    $preco_td = $_GET['105'] * $frutas[4]['preco'];
    $qtd = $_GET['105'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Pêra', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['106'])):
    $preco_td = $_GET['106'] * $folhas[0]['preco'];
    $qtd = $_GET['106'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Alface', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['107'])):
    $preco_td = $_GET['107'] * $folhas[1]['preco'];
    $qtd = $_GET['107'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Brócolis', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['108'])):
    $preco_td = $_GET['108'] * $folhas[2]['preco'];
    $qtd = $_GET['108'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Cebolinho', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['109'])):
    $preco_td = $_GET['109'] * $folhas[3]['preco'];
    $qtd = $_GET['109'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Espinafre', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['110'])):
    $preco_td = $_GET['110'] * $folhas[4]['preco'];
    $qtd = $_GET['110'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Hortelã', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['111'])):
    $preco_td = $_GET['111'] * $raizes[0]['preco'];
    $qtd = $_GET['111'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Batata-doce', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['112'])):
    $preco_td = $_GET['112'] * $raizes[1]['preco'];
    $qtd = $_GET['112'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Batata-inglesa', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['113'])):
    $preco_td = $_GET['113'] * $raizes[2]['preco'];
    $qtd = $_GET['113'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Macaxeira descascada', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['114'])):
    $preco_td = $_GET['114'] * $raizes[3]['preco'];
    $qtd = $_GET['114'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Macaxeira', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['115'])):
    $preco_td = $_GET['115'] * $raizes[4]['preco'];
    $qtd = $_GET['115'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Nabo', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['116'])):
    $preco_td = $_GET['116'] * $verduras[0]['preco'];
    $qtd = $_GET['116'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Cenoura', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['117'])):
    $preco_td = $_GET['117'] * $verduras[1]['preco'];
    $qtd = $_GET['117'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Chuchu', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['118'])):
    $preco_td = $_GET['118'] * $verduras[2]['preco'];
    $qtd = $_GET['118'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Pepino', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['119'])):
    $preco_td = $_GET['119'] * $verduras[3]['preco'];
    $qtd = $_GET['119'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Quiabo', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif; 
if(isset($_GET['120'])):
    $preco_td = $_GET['120'] * $verduras[4]['preco'];
    $qtd = $_GET['120'];
    $id = $_SESSION['id_pedido'];

    $sql = "INSERT INTO produto (nome_produto, preco_produto, qtd_produto, id_pedido) VALUES ('Tomate', '$preco_td', '$qtd', '$id')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php');
    else:
        header('Location: index.php');
    endif;
endif;
