<?php
require 'Produto.class.php';
$produto = new Produto();

$itens = $produto->getProdutos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Produtos</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Fornecedor</th>
        </tr>
        <?php
        foreach ($itens as $item) {
            ?>
            <tr>
                <td><?php echo $item['id']        ;?></td>
                <td><?php echo $item['nome']      ;?></td>
                <td><?php echo $item['descricao'] ;?></td>
                <td><?php echo $item['preco']     ;?></td>
                <td><?php echo $item['fornecedor'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    
</body>
</html>








