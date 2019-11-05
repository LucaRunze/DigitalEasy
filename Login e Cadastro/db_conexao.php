<?php

//Conexão com banco de dados

$severname = "localhost";
$username = "root";
$password = "";
$db_name = "agua_doce";


$connect = mysqli_connect($severname, $username, $password, $db_name) or die(mysqli_error());

$db = mysqli_select_db($connect, $db_name);

?>





