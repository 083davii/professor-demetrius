<?php

include ("conexao.php");
$nome = isset ($_POST['nome'])?$_POST['nome']:'';
$login = isset ($_POST['login'])?$_POST['login']:'';
$senha = isset ($_POST['senha'])?$_POST['senha']:'';

$insert = "insert into login (nome, login, senha)
values
('$nome', '$login', '$senha')";
$query=mysqli_query($conexao, $insert);

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
    <h2> Cadastro Realizado Com Sucesso, seja bem vindo!</h2>
    <a href = "index.php"> Voltar </a>
</body>
</html>

