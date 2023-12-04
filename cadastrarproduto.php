<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link  rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
      
    ?>

     <h2>Cadastrar</h2><br><br>

     <form action="assets/db/cadastro/insert.php" method="POST">
        <label for="nome">Nome</label><br><br>
        <input type="text" name="nome"><br><br>
        <label for="email">E-mail</label><br><br>
        <input type="email" name="email"><br><br>
        <label for="senha">Senha</label><br><br>
        <input type="password" name="senha" minlength="3"><br><br>
        <label for="Telefone">Telefone</label><br><br>
        <input type="text" name="Telefone"><br><br>
        <label for="Endereco">Endereço</label><br><br>
        <input type="text" name="Endereco"><br><br>
        <input type="submit" value="Enviar"><br><br>

    </form>

    <?php
      
    ?>
</body>
</html>