<?php
require'Produto.class.php';
$produto = new Produto();
if(isset($_POST['nome'])){
    $nome       = $_POST['nome'];
    $descricao  = $_POST['descricao'];
    $preco      = $_POST['preco'];
    $fornecedor =  $_POST['fornecedor'];

    $produto->adicionarProduto($nome, $descricao, $preco, $fornecedor);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir Produtos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    .fundo{
        background:#ccc;
    }
   
  </style>
</head>
<body>
    <div class="container fundo py-4">
        <form method="post">
            <h1 class="display-6">Adicionar Produto</h1>
            <!-- $nome,$descricao, $preco, $fornecedor-->
            <label for="nome" class="form-label" >Nome</label><br>
            <input type="text" class="form_control" name = "nome" required><br>

            <label for="descricao" class="form-label" >Descrição</label><br>
            <input type="text" class="form_control" name ="descricao" required><br>

            <label for="preco" class="form-label" >Preço</label><br>
            <input type="text" class="form_control" name ="preco" required><br>
            
            <label for="fornecedor" class="form-label" >Fornecedor</label><br>
            <input type="text" class="form_control" name ="fornecedor" required><br>
            <button class="btn btn-success mt-3" type = "submit">
                Cadastrar
            </button>
        </form>
    </div>

</body>
</html>