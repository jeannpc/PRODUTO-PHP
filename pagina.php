<?php
    if( isset($_post['nome'])){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $fornecedor = $_POST['forn'];

        echo "Produto...: ".$produto." <br>";
        echo "Descricao.: ".$descricao." <br>";
        echo "Preco.....: ".$preco." <br>";
        echo "Forncedor.: ".$fornecedor." <br>";

         // $produto = new Produto();
        // $produto->inserirProduto($nome, $descricao, $preco, $fornecedor);
       
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <div class="container">
        <div class="centraliza">
            <form action="" method="post">
                Nome:<br>
                <input type="text" name="nome"><br><br>
                Descrição:<br>
                <input type="text" name="descricao"><br><br>
                Preco:<br>
                <input type="text" name="preco"><br><br>
                fornecedor:<br>
                <input type="text" name="forn"><br><br>
                <input type="submit" class = 'botao' value="Cadastar">
            </form>
        </div>
    </div>
    
</body>
</html>