
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud47";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $sql = "UPDATE cadastro SET telefone='telefonee' WHERE idcadastro=idcadastro";
 
  // Prepare statement
  $stmt = $conn->prepare($sql);
 
  // execute the query
  $stmt->execute();
 
  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>

 <a href="../../../index.php">Voltar ao início</a>
    
</body>
</html>