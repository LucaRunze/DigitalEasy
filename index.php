<?php
    require 'config.php';
?>

<a href="novo.php">Novo Produto</a>

<table border = "0" width="100%">
    <tr>
        <th>Modelo Produto</th>
        <th>Preço</th>
        <th>Categoria do Produto</th>
        <th>Descrição do Produto</th>
        <th>Marca do Produto</th>

    </tr>
<?php
$sql = "SELECT * FROM produtos";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0)
{
    foreach($sql->fetchAll() as $dados)
    {
        echo '<tr>';
        echo '<td align="center">'.$dados['modelo_produto'].'</td>';
        echo '<td align="center">'.$dados['preco_produto'].'</td>';
        echo '<td align="center">'.$dados['categoria_produto'].'</td>';
        echo '<td align="center">'.$dados['descricao_produto'].'</td>';
        echo '<td align="center">'.$dados['marca'].'</td>';
        echo '<td align="center"><a href="editar.php?id='.$dados['id'].'">Editar</a> - <a href="excluir.php?id='.$dados['id'].'">Excluir</a></td>';
        echo '</tr>';
    }
}
?>
</table>


