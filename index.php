<?php
require 'Produto.class.php';
$p = new Produto();
$p->conectar();

$p->inserirProduto("Geladeira","Duplex", 5000, "Brastemp");


