<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>academia</title>
    <link rel="stylesheet" href="assets/css/css3.css">
</head>
<body>
    
    <?php
       
    ?>
<div class="todo">
   

   <div class="area">
       <h2>Área restrita</h2>

    
   <form action="" method="GET">
       <label for="email">E-mail:</label><br>
       <input type="email" name="email" placeholder="Informe seu e-mail de cadastro"><br><br>
       <label for="senha">Senha:</label><br>
       <input type="password" name="senha" placeholder="Informe sua senha"><br><br>
       <input class="botao2"  type="submit" value="Enviar"><br><br>


       <!-- <div id="senha">
           <a href="#" class="botao">Esqueceu a senha? <a href="#" class="botao" >Clique aqui.</a> </a><br>
       </div>
       <div id="senha">
           <a href="#" class="botao">Nao tem cadastro? <a href="#"  class="botao" >Cadastre-se aqui.</a> </a><br><br>
       </div> -->

       <?php
            include("assets/db/cadastro/login.php");
        ?>

   </form>
   

</body>
</html>