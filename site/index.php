<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
olá,<?php
  if(isset($_SESSION['nome'])==null){
?>
 visitante<br>
 <a href="login.php">login</a>
<?php } else{
     echo $_SESSION['nome'];?>
    <br><a href="cadastro.php">cadastrar</a><br>
    <a href="sair.php">sair</a>
    <?php } ?>

</center>



</body>
</html>