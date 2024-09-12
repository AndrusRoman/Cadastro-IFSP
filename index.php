<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssIndex.css">
    <?php
        include('inicia_sessao.php');
        if(empty($_SESSION['login'])){
            header('location: login.html');
        }
        echo "Olá ". $_SESSION['login']['nome']; 
    ?>
</head>
<body>
    <fieldset>
    <h1>O que deseja fazer?</h1>
    <button><a href="CadastroCidade.php">Cadastrar Cidade</a></button>
    <button><a href="ListarCidade.php">Listar Cidade</a></button>
    <br>
    <br>   
    <button><a href="CadastroCliente.php">Cadastrar Cliente</a></button>
    <button><a href="ListarCliente.php">Listar Cliente</a></button>
    <br>
    <button><a href="logout.php">Logout</a></button>
    </fieldset>
</body>
</html>