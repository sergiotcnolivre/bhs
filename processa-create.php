<?php
include('conexao.php');

$nome = $mysqli->real_escape_string($_POST['nome']);
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);
$senhaCriptografada = md5($senha);

$sql_code = "INSERT INTO usuarios (nome, senha, email) VALUES ('$nome', '$senhaCriptografada', '$email')";

$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

if ($quantidade == 1) {
    header("Location: index.php");
} else {
    echo "Falha ao logar! E-mail ou senha incorretos";
}

header("Location: index.php");
