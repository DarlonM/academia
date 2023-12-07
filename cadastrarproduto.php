<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link  rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
      
    ?>

     <h2>Cadastrar Produto</h2><br><br>

     <form action="assets/db/cadastrarproduto.php" method="POST">
        <label for="Descriçaõ">Descrição</label><br><br>
        <input type="text" Descriçaõ="Descrição"><br><br>
        <label for="Descriçaõ">Código</label><br><br>
        <input type="text" Código="Código"><br><br>
        <label for="Quantidade">Quantidade</label><br><br>
        <input type="text" Quantidade="Quantidade"><br><br>
        <label for="Preço Unitário">Preço Unitário</label><br><br>
        <input type="text" Preço Unitário="Preço Unitário"><br><br>
        <label for="Preço Total">Preço Total</label><br><br>
        <input type="text" Preço Total="Preço Total"><br><br>
        <input type="submit" value="Cadastrar">


   
    </form>

    <?php
      
    ?>
</body>
</html>