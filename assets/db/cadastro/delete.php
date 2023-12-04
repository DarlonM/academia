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

        $id = $_GET["id"];

        $sql = "DELETE FROM cadastro WHERE idcadastro = $id";

        if ($conn->query($sql) == TRUE)
        {
            echo "<p>Cadastro excluído com sucesso.</p>";
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