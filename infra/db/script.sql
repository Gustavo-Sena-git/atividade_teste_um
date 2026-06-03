CREATE DATABASE sistema_simples;

USE sistema_simples;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuario (usuario, senha) VALUE ('admin','123');

/*Esse código cria o banco de dados da aplicação, cria uma tabela de usuários e adiciona um usuário inicial no sistema.*/