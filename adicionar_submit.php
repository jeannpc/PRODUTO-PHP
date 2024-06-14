<?php
require 'Produto.class.php';
$produto = new Produto();

$nome  = $_POST['nome'];
$descricao  = $_POST['descricao'];
$preco      = $_POST['preco'];
$fornecedor = $_POST['fornecedor'];

$produto->adicionarProduto($nome,$descricao,$preco,$fornecedor);
    
header('location:mostrar_produto.php');
