<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CadastroUsuario.css">
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
        <legend>Cadastro Cliente</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <label for="ativo">Ativo</label>
            <input type="radio" id="ativo" name="Sim" value="1">Sim <br>
            <input type="radio" id="ativo" name="Nao" value="0">Não<br>
        </div>
        <br>
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
            <br>
            <button type="submit">Cadastrar</button>
            <button><a href="index.php">Retornar</a></button>
        </div>
        </fieldset>
    </form>
</body>
</html>