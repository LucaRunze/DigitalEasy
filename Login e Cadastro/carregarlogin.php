<?php
session_start();

include('db_conexao.php');
$n = $_POST['nome'];
$s = $_POST['senha'];

if(isset($_POST['nome']) != null  || isset($_POST['senha']) != null) {
$_SESSION['n'] = $n; 
$_SESSION['s'] = $s;
}

if(isset($_POST['nome']) != 1 || isset($_POST['senha']) != 1) {
    header("Location: login.php");
} 

$Nome = mysqli_real_escape_string($connect, $_POST['nome']);
$Senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "SELECT * FROM usuarios WHERE Nome='{$Nome}' and Senha='{$Senha}'";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['nome'] = $Nome;
    header('Location: index.php');
} else {
    header('Location: cadastre-se.php');
}

?>