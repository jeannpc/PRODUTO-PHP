CREATE DATABASE IF NOT EXISTS Etimproduto;
USE etimproduto;
CREATE TABLE IF NOT EXISTS produtos(
    id INT NOT NULL auto_increment PRIMARY KEY,
    nome varchar(100),
    descricao varchar(300),
    preco FLOAT(10,2),
    fornecedor varchar(100)
)