<?php

require 'config.php';

if(isset($_POST['modelo_produto']) && empty($_POST['modelo_produto'])== false)
{
    $modelo = addslashes($_POST['modelo_produto']);
    $preco = addslashes($_POST['preco_produto']);
    $categoria = addslashes($_POST['categoria_produto']);
    $descri = addslashes($_POST['descricao_produto']);
    $marca = addslashes($_POST['marca']);


    
    $sql = "INSERT INTO produtos SET modelo_produto = '$modelo', preco_produto = '$preco', categoria_produto = '$categoria', descricao_produto = '$descri', marca = '$marca'";
    $pdo->query($sql);
    
    header("Location: index.php");
    
}

?>

<form method="post">
    Modelo:<br>
    <input type="text" name="modelo_produto"><br><br>
    Preço:<br>
    <input type="text" name="preco_produto"><br><br>
    Categoria:<br>
    <input type="text" name="categoria_produto"><br><br>
    Descrição:<br>
    <input type="text" name="descricao_produto"><br><br>
    Marca:<br>
    <input type="text" name="marca"><br><br>
    
    <input type="submit" value="Enviar Produto">    
</form>