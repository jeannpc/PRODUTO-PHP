<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Produtos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container bg-info p-3 mt-2">
        
    <h4 class="display-7 mb=3">Adicionar Novo Produto</h1>
        <form action="adicionar_submit.php" method = "post">
        <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" required>

            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" required>

            <label for="preco">Preço</label>
            <input type="text" class="form-control" name="preco" required>
            <label for="fornecedor">Fornecedor</label>
            <input type="text" class="form-control" name="fornecedor" required>
            <input type="submit" class = "btn btn-primary mt-3" value = "Cadastrar">
        </form>    
    </div>
</body>
</html>