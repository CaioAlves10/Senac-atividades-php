<?php
include_once('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$msg = $_POST['msg'];

$sql = "INSERT INTO cadastro (nome, email, idade, msg)
VALUES ('$nome', '$email', '$idade', '$msg')";

$envia = mysqli_query($connection, $sql);
?>