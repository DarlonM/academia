<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>academia</title>
</head>
<body>

    <?php

        include_once("../conn.php");

        $nome = $_REQUEST['Nome'];
        $email = $_REQUEST['Email'];
        $Telefone = $_REQUEST['Telefone'];
        $Endereco = $_REQUEST['Endereco'];
        $senha = md5($_REQUEST['Senha']); //criptografando os dados com MD5

        $sql = "INSERT INTO Cadastro (Nome, Email, Telefone, Endereco, Senha) VALUES ('$Nome', '$Email', ' $Telefone', '$Endereco', '$Senha')";

        if ($conn->query($sql) == TRUE)
        {
            echo "<p>Cadastro realizado com sucesso.</p>";
        }
        else
        {
            echo "<p>Erro.</p>";
        }

        $conn->close();


    ?>

 <a href="../../../index.php">Voltar para o início</a>
    
</body>
</html>