<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssCadastro.css">
</head>
<body>
    <form action="AlteraClienteExe.php" method="post">
        <fieldset>
        <legend>Altera Cliente</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']?>">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        </div>
        <div>
            <label for="ativo">Ativo</label>
            <input type="radio" id="ativo" name="ativo" value="1">Sim <br>
            <input type="radio" id="ativo" name="ativo" value="0">Não <br>
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
            <?php
                include('includes/conexao.php');
                $sql = "SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                }
            ?>
            </select>
        </div>
        <div>
            <button type="submit">Alterar <br></button>
            <button><a href="ListarCliente.php">Retortar</a></button>
        </div>
        
        </fieldset>
    </form>
</body>
</html>