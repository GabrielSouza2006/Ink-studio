<?php
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$conexao = $mysqli_connect('localhost', 'root', '', 'inkstudio');

$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
$mysqli_query($conexao, $query);

$mysqli_close($conexao)
?>