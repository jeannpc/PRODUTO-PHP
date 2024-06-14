<?php
include 'Produto.class.php';
$produtos = new Produto();

$itens = $produtos->getProdutos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Produtos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <table class="table">
            <h1 class = "display-6">Mostrar produtos</h1><p></p>
            <a class="btn btn-warning my-3" href="inserirProduto.php">Inserir Produto</a>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Fornecedor</th>
                <th>Ações</th>
            </tr>
            <?php
            foreach($itens as $item):
            ?>
            <tr>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['nome'];?></td>
                <td><?php echo $item['descricao'];?></td>
                <td><?php echo $item['preco'];?></td>
                <td><?php echo $item['fornecedor'];?></td>
                <td>
                    <a class="btn btn-success" href="excluir.php?id=<?php echo $item['id'];?>">Excluir</a>
                    <a class="btn btn-danger" href="alterar.php?id=<?php echo $item['id'];?>">Alterar</a>
                </td>
                <?php
                endforeach;
                ?>
            </tr>
        </table>

    </div>

</body>
</html>